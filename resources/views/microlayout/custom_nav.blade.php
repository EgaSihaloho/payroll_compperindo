 <!-- Breadcrumb-->
<div class="bg-gray-200 text-sm" id ='custom_nav'>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 py-3">
            <li class="breadcrumb-item">
                <a class="fw-light" href="#">
                    Detail Karyawan
                </a>
            </li>
            <li class="breadcrumb-item">
                <a class="fw-light" href="#">
                    Template Gaji
                </a>
            </li>
            <li class="breadcrumb-item">
                <a class="fw-light" href="#">
                    History Gaji
                </a>
            </li>
        </ol>
        </nav>
    </div>
</div>

<script> 
    const customNav= document.querySelector('#custom_nav');
    const ol = document.querySelector('#custom_nav ol');
    if(head !== 'Data Karyawan'){
        customNav.remove();
    } 
    function constructCustomNav(data) {
        ol.innerHTML = '';
        data.forEach(data_ => {
            
            buildObject(ol, {
                type : 'li',
                classes : ['breadcrumb-item'],
                childObj: [
                    {
                        type: 'a',
                        classes:  ['fw-light', data_.classes],
                        attr:{
                            href: '#'
                        },
                        dataSet:{
                            url:data_.url,
                            id : data_.id
                        },
                        html : data_.html
                    }
                ]
            })
        });
    }
</script>