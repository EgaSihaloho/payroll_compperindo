 <section class="tables">   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="row">
                            <div class="col-lg-9">@include('microlayout.search')</div>
                            <div class="col-lg-3" id="divAdd"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-sm mb-0 table-striped table-hover">
                                <thead></thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" id="pagination"></div>
                            <div class="col-lg-6 text-right" id="detail-entries"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($head == 'Data Barang')
        <script>
        const m_satuan = JSON.parse('{!! json_encode($m_satuan) !!}');
        const head = '{!!$head!!}';
        </script>
    @elseif($head == 'Data Karyawan')
        <script>
            const status_perkawinan = JSON.parse('{!! json_encode($status_perkawinan) !!}');
            const departement = JSON.parse('{!! json_encode($departement) !!}');
            const relgaji = JSON.parse('{!! json_encode($relgaji) !!}');
            const gaji_pokok = JSON.parse('{!! json_encode($gaji_pokok) !!}');
            let allHarian = '';
            let allMakan ='';
            let allLembur = '';
            const head = '{!!$head!!}';
        </script>
    @endif
    

    <script>
        let dataTable = '';     
        const urlTable = '{!!$urlTable!!}';
        const urlFind = '{!! $urlFind !!}';
        const entriesDiv = document.querySelector('#detail-entries');
        const paginationDiv = document.querySelector('#pagination');
        const tbody = document.querySelector('tbody');
        const thead = document.querySelector('thead');
        const tableDiv = document.querySelector('.table-responsive');
        const divAdd = document.querySelector('#divAdd');

        if(user.role == '1') loadAddBtn();

        function loadAddBtn(){
            buildObject(divAdd, {
                type:'div',
                classes:['text-right'],
                childObj :[
                    {
                        type:'i',
                        classes: ['fa-sharp', 'fa-solid', 'fa-plus', 'mr-4',  'btn', 'btn-primary', 'add-barang']
                    }
                ]
            });
        }
        loadTable();
        async function loadTable(){
            loadingTable('show');
            const resultData = await findData(urlTable, 'get', '');
            dataTable = resultData.data.dataTable;
            loadingTable('hide');
            constructTable({
                data : resultData.data.dataTable, 
                key : resultData.data.keyTable, 
                from : resultData.data.dataTable.from,
                for : resultData.data.for
            });
            let status = (resultData.code =='99') ? false : true;
            showResponse(resultData.header, resultData.desc, status);
        }
        
        

        function constructTable(data){
            if(user.role !== 1) delete key['Setting'];
            constructThead(data.key);
            constructTbody(data);
            constructPage(data.data);
            constructEntris(data.data);
        }

        async function refreshTable(url){
            try{
                const resultData = await findData(url, 'get', '');
                loadingTable('hide');
                
                dataTable =  resultData.data.dataTable;
                constructTable({
                    data : resultData.data.dataTable, 
                    key : resultData.data.keyTable, 
                    from : resultData.data.dataTable.from,
                    for : resultData.data.for
                });
                let status = (resultData.code == '99') ? false : true;
                showResponse(resultData.header, resultData.desc, status);
             } catch (error) {
                refreshTable(urlTable);
                showResponse("Error", error, false);
            }
        }

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

        function createLiPage(appendTo, to, data){
            const active = (to == data.current_page) ? 'active' : null;
            const li = buildObject(appendTo, {
                type: 'li',
                classes: ['page-item', active],
                childObj:[
                    {
                        type : 'a',
                        classes : ['page-link'],
                        dataSet: {
                            urlPage : data.path + "?page=" + to
                        },
                        html : to
                    }
                ]
            });
            return li;
        }

        function constructPage(data){
            
            paginationDiv.innerHTML = '';
            const ul = document.createElement("ul");
            ul.classList.add("pagination");
            if(data.current_page == 1){
                
            }
            buildObject(ul, {
                type: 'li',
                classes : ['page-item'],
                childObj :[
                    {
                        type :'a',
                        classes : ['page-link'],
                        dataSet : {
                                urlPage : (data.current_page == '1') ? '' : data.path + "?page=" + '1'
                        },
                        html : '&#10096'
                        
                    }
                ]
            });
            buildObject(ul, {
                type: 'li',
                classes : ['page-item'],
                childObj :[
                    {
                        type :'a',
                        classes : ['page-link'],
                        dataSet : {
                                urlPage : (data.current_page == '1') ? '' : data.path + "?page=" + (data.current_page -1)
                        },
                        html: '«'                        
                    }
                ]
            });
            
            if(parseInt(data.last_page) < 6){
                for(let i = 1; i <= parseInt(data.last_page); i++){
                    createLiPage(ul, i, data);
                }
            }else if(data.last_page > 5 && data.current_page <= 5){
                for(let i = 1; i <= 6; i++){
                    
                    createLiPage(ul, i, data);
                }
                buildObject(ul, {
                    type: 'li',
                    classes : ['page-item'],
                    attr:{
                        disabled:'disabled'
                    },
                    childObj :[
                        {
                            type :'a',
                            classes : ['page-link'],
                            html : '...',
                            dataSet : {
                                urlPage : ''
                            }
                           
                        }
                    ]
                });
            } else if(data.last_page > 5 && data.current_page > 5 && data.current_page <= data.last_page -2){
                buildObject(ul, {
                    type: 'li',
                    classes : ['page-item'],
                    attr:{
                        disabled:'disabled'
                    },
                    childObj :[
                        {
                            type :'a',
                            classes : ['page-link'],
                            html : '...',
                            dataSet : {
                                urlPage : ''
                            }
                           
                        }
                    ]
                });
                let totalI = (data.current_page + 2 >= data.last_page) ? data.last_page :data.current_page +2;
                for(let i = parseInt(data.current_page) - 2; i <= totalI; i++){
                    createLiPage(ul, i, data);
                }
                if((data.current_page + 2) !== data.last_page){
                    buildObject(ul, {
                        type: 'li',
                        classes : ['page-item'],
                        attr:{
                            disabled:'disabled'
                        },
                        childObj :[
                            {
                                type :'a',
                                classes : ['page-link'],
                                html : '...',
                                dataSet : {
                                    urlPage : ''
                                }
                            
                            }
                        ]
                    });
                }
                   
            } else {
                buildObject(ul, {
                    type: 'li',
                    classes : ['page-item'],
                    attr:{
                        disabled:'disabled'
                    },
                    childObj :[
                        {
                            type :'a',
                            classes : ['page-link'],
                            html : '...',
                            dataSet : {
                                urlPage : ''
                            }
                           
                        }
                    ]
                });
                for(let i = data.last_page - 4; i <= data.last_page; i++){
                    
                    createLiPage(ul, i, data);
                }

               
            }

            paginationDiv.appendChild(ul);
            
            buildObject(ul, {
                type: 'li',
                classes : ['page-item'],
                childObj :[
                    {
                        type :'a',
                        classes : ['page-link'],
                        dataSet : {
                                urlPage : (data.current_page == data.last_page) ? '' : data.path + "?page=" + (data.current_page +1)
                        },
                        html: '&#187'                        
                    }
                ]
            });
            
            buildObject(ul, {
                    type: 'li',
                    classes : ['page-item'],
                    attr:{
                        disabled:'disabled'
                    },
                    childObj :[
                        {
                            type :'a',
                            classes : ['page-link'],
                            dataSet : {
                                urlPage : (data.current_page == data.last_page) ? '' : data.path + "?page=" + data.last_page
                            },
                            html :'&#10097'           
                        }
                    ]
                });
                        
        }
        function replaceUrl(data, replacement, from){
            const destructData = data.split('/');
            let string = '';
            destructData.forEach((data, key) => {
                if(data == '') {
                    data = '//';   
                }else if (data == from){
                    data = `/${replacement}`;
                }
                string += data;
            });
            return string;
        }
        
        function constructTbody(dataTable){
            tbody.innerHTML = '';
            tbody.classList.add('text-center');
            
            dataTable.data.data.forEach((data, keys) => {
                
                let tr = buildObject(tbody, {type:'tr'});
                Object.values(dataTable.key).forEach(key => {                   
                    if(key == 'id'){
                        let td = buildObject(tr,
                            {
                                type:'td', 
                                html:(parseInt(dataTable.from)+parseInt(keys))
                            }
                        )
                    } else if(key !== '' && key !== 'id'){
                        let dataHTML = data[key];
                        if(key == 'harga') dataHTML = toRp(data[key]);
                        if(key == 'nominal' && data[key] !== null) dataHTML = toRp(data[key]);
                        if(dataHTML == null) dataHTML = '---';
                        let td = buildObject(tr,
                            {
                                type:'td', 
                                html: dataHTML
                            }
                        )
                    }
                })
                if(user.role == 1){
                    let td = buildObject(tr, {
                        type:'td',
                        childObj :[
                            {
                                type:'i',
                                classes:['fa-regular', 'fa-pen-to-square', 'btn-warning', 'btn'],
                                dataSet :{
                                    id :keys,
                                    value: data['id']
                                }
                            },
                            {
                                type:'i',
                                classes:['fa-solid', 'fa-trash', 'btn-danger', 'btn'],
                                dataSet : {
                                    id :keys,
                                    value: data['id'],
                                }
                            }
                        ]
                    });
                }
                
            });
        }

        
        function constructThead(key){
            
            thead.innerHTML = '';
            thead.classList.add('text-center');
            let tr = buildObject(thead,{type : 'tr'});
            Object.keys(key).forEach(data => {
                if(data == 'Setting'){
                     buildObject(tr, {
                        type : 'th',
                        childObj: [
                            {
                                type: 'i',
                                classes : ['fa-solid', 'fa-gear', 'fa-lg']
                            }
                        ]
                    });
                    
                } else {
                    buildObject(tr, {type : 'th',html : data});
                }
            });
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
    
</section>