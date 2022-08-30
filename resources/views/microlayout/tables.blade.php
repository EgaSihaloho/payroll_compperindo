 <section class="tables">   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        @include('microlayout.search')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-sm mb-0 table-striped table-hover">
                                <thead></thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" id="pagination">
                            </div>
                            <div class="col-lg-6 text-right" id="detail-entries" >
                            </div>
                        </div>
                                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script>
       
        const keyTable = JSON.parse('{!!json_encode($keyTable)!!}');
        const entriesDiv = document.querySelector('#detail-entries');
        const paginationDiv = document.querySelector('#pagination');
        const tbody = document.querySelector('tbody');
        const thead = document.querySelector('thead');
        const tableDiv = document.querySelector('.table-responsive');
        constructTable(setDataTable(), keyTable);

        function setDataTable(){
            const dataTable = JSON.parse('{!!json_encode($dataTable)!!}');
            dataTable.path = replaceUrl(dataTable.path, 'getDataTable')
            return dataTable;
        }

        function constructTable(data, key){
            constructThead(key);
            constructTbody(data);
            constructPage(data);
            constructEntris(data);
        }

        document.addEventListener('click', async function(e) {
            if(e.target.classList.contains('page-link')){
                try {
                    if(e.target.dataset.urlPage !== ''){
                        loadingTable('show');
                        const resultData = await findData(e.target.dataset.urlPage, 'get', '');
                        loadingTable('hide');   
                        constructTable(resultData.data.dataTable, resultData.data.keyTable);
                        let status = (resultData.code =='99') ? false : true;
                        showResponse(resultData.header, resultData.desc, status);
                    }
                } catch (error) {
                    showResponse("Error", error, false) ;
                }
            } else if(e.target.classList.contains('btnSubmit')){
                e.preventDefault();
                try {
                    loadingTable('show');
                    const key = (searchInput.value == '') ? '**': searchInput.value;
                    const resultData = await findData('http://localhost:8000/findBarang/'+key, 'get', '');
                    loadingTable('hide');   
                    constructTable(resultData.data.dataTable, resultData.data.keyTable);
                    let status = (resultData.code =='99') ? false : true;
                    showResponse(resultData.header, resultData.desc, status);
                
                } catch (error) {
                    showResponse("Error", error, false) ;
                    
                }
            } else if(e.target.hasAttribute("data-id-edit")){
                // constructModal('edit');
                // constructEditForm(dataTable[e.target.dataset.idEdit]);
                btnModal.click();

            }
        });

        function loadingTable(type){
            const loading = document.querySelectorAll('.loading');
            if(loading.length > 0){
                loading.forEach(obj => {
                    obj.remove();
                });
            }
            if(type == 'show') {
                appendTo = document.querySelector('.card-body');
                thead.innerHTML = '';
                tbody.innerHTML = '';
                paginationDiv.innerHTML ='';
                entriesDiv.innerHTML = '';
                constructLoading(appendTo);
            } else {
                if(loading.length > 0){
                loading.forEach(obj => {
                    obj.remove();
                });
            }
            }
            
        }


        function findData(url, methods, data) {
            if(data.length > 0){
                return fetch(url, {
                    method: methods ,
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        "X-CSRF-TOKEN": '{{csrf_token()}}'
                    },
                    body : data  
                })
                .then(response =>{
                    if(!response.ok) throw new Error(response.statusText);
                    return response.json();
                })
                .then(response => {
                    if(response.code !== '00') throw new Error(response.desc);
                    return response;
                });
            } else {
                return fetch(url, {
                    method: methods ,
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        "X-CSRF-TOKEN": '{{csrf_token()}}'
                    }  
                })
                .then(response =>{
                    if(!response.ok) throw new Error(response.statusText);
                    return response.json();
                })
                .then(response => {
                    // if(response.code !== '00') throw new Error(response.desc);
                    return response;
                });
            }
            
            
        }


        function constructLoading(appendTo){
            const wrapLoading = document.createElement('div');
            wrapLoading.classList.add('loading', 'd-flex' ,'justify-content-center');
            const loadingDiv = document.createElement('div');
            loadingDiv.classList.add('spinner-border', 'text-primary');
            loadingDiv.setAttribute('role', 'status');
            const loadingSpan = document.createElement('span');
            loadingSpan.classList.add('sr-only');
            loadingSpan.innerHTML = 'loading...';

            loadingDiv.appendChild(loadingSpan);
            wrapLoading.appendChild(loadingDiv);
            appendTo.appendChild(wrapLoading);
            // tableDiv.appendChild(wrapLoading);
        }

        function constructEntris(data){
            entriesDiv.innerHTML = '';
            const p = document.createElement("p");
            p.classList.add("text-gray-600");
            p.innerHTML = "Showing "+data.from+" to "+data.to+" from "+data.total+" entries";
            entriesDiv.appendChild(p);
        }

        function constructPage(data){
            paginationDiv.innerHTML = '';
            const ul = document.createElement("ul");
            ul.classList.add("pagination");
            for(let i = 1; i <= parseInt(data.last_page); i++){
                const li = document.createElement("li");
                li.classList.add("page-item");
                if(i == data.current_page) li.classList.add("active"); 
                const a = document.createElement("a");
                a.classList.add("page-link");
                a.dataset.urlPage = data.path + "?page=" + i;
                // a.setAttribute("href", data.path + "?page=" + i);
                a.innerHTML =i;
                li.appendChild(a);
                ul.appendChild(li); 
            }
            paginationDiv.appendChild(ul);
            
            /*Set Previous & Next Url*/
            let prevUrl = "";
            let nextUrl = "";
            const currentPage = parseInt(data.current_page);
            const before = currentPage-1;
            const next = currentPage +1 
            const lastPage = parseInt(data.last_page);
            if(before > 0)  prevUrl =  data.path + "?page=" + before;
            if(next  <  lastPage+1 ){
                nextUrl =  data.path + "?page=" + next;
            } 
            const paramPagination = [
                {
                    url : prevUrl,
                    text : '«'
                },
                {
                    url : nextUrl,
                    text : '»'
                }
            ];
            for(let i =0; i < paramPagination.length; i++){
                li = document.createElement("li");
                li.classList.add("page-item");
                a = document.createElement("a");
                a.classList.add("page-link");
                if(paramPagination[i].url !== null){
                    a.dataset.urlPage= paramPagination[i].url;
                } else {
                    li.setAttribute("disabled", "disabled");
                }
                a.innerHTML =paramPagination[i].text;
                li.appendChild(a);
                (i == 0) ? ul.insertBefore(li, ul.firstChild) : ul.appendChild(li);
            }
                        
        }
        function replaceUrl(data, replacement){
            const destructData = data.split('/');
            let string = '';
            destructData.forEach((data, key) => {
                if(data == '') {
                    data = '//';   
                }else if (data == "barang"){
                    data = `/${replacement}`;
                }
                string += data;
            });
            return string;
        }

        
        function constructTbody(data){
            const dataTable = data;
            tbody.innerHTML = '';
            dataTable.data.forEach((data, keys) => {
                const tr = document.createElement('tr');
                Object.keys(data).forEach((key) => {
                    const td = document.createElement('td');
                    if(key == 'id') {
                        td.innerHTML = keys+dataTable.from;
                    } else {
                        td.innerHTML = data[key];
                    }
                    tr.appendChild(td);
                });
                constructCrudButton(keys+dataTable.from,data['id'], tr);
                tbody.appendChild(tr);
            });
        }

        
        function constructThead(key){
            thead.innerHTML = '';
            thead.classList.add('text-center');
            const tr = document.createElement('tr');
            key.forEach(data => {    
                const th = document.createElement('th');
                (data !== 'id') ? th.innerHTML =data : th.innerHTML ='#';
                tr.appendChild(th);
            })
            th = document.createElement('th');
            th.setAttribute('colspan', '2');
            
            const i = document.createElement('i');
            i.classList.add('fa-solid', 'fa-gear'); 
            th.appendChild(i);
            tr.appendChild(th);
            thead.appendChild(tr);
        }

        function constructCrudButton(key, id, appendTo){
            const btnModal = [    
                {
                    for : "edit",
                    classes : ['btn', 'btn-warning', 'fa-solid', 'fa-pen-to-square'],
                    modalHeader : 'Edit Barang',
                    // dataSet : {
                    //     bsToggle : "modal",
                    //     bsTarget : "#exampleModal"
                    // }
                },
                {
                    for : 'delete',
                    classes : ['btn', 'btn-danger', 'fa-solid', 'fa-trash-can'],
                    modalHeader : 'Delete Barang',
                    // dataSet : {
                    //     bsToggle : "modal",
                    //     bsTarget : "#exampleModal"
                    // }

                }
            ];
            btnModal.forEach(data => {
                td = document.createElement('td');
                i = document.createElement('i');
                data.classes.forEach(data => {
                    i.classList.add(data);
                });
                // i.dataset.bsToggle = data.dataSet.bsToggle;
                // i.dataset.bsTarget = data.dataSet.bsTarget;
                (data.for == 'edit') ? i.dataset.idEdit = key-1 : i.dataset.idDelete = key-1;
                
                i.dataset.origin = id;
                td.appendChild(i);
                appendTo.appendChild(td);
            });
        }


    </script>
    <script src="js/responseToastr.js"></script>
</section>