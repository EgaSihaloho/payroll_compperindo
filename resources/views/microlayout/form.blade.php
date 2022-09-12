
<form class="form-horizontal" id="form-horizontal">
    <div class="row">
        <div class="col-sm-6">
            <div class="row gy-2 mb-4">
                <label class="col-sm-4 form-label text-end mt-3" for="first_name">
                    First Name
                </label>
               
                <div class="col-sm-8">
                    <input class="form-control" id="first_name" type="text" placeholder="First Name">
                {{-- <small class="form-text text-danger">Example help text that remains unchanged.</small> --}}
                </div>
            </div>
            <div class="row gy-2 mb-4">
                <label class="col-sm-4 form-label text-end mt-3" for="last_name">
                    Last Name
                </label>
                <div class="col-sm-8">
                    <input class="form-control" id="last_name" type="text" placeholder="Last Name">
                    {{-- <small class="form-text">Example help text that remains unchanged.</small> --}}
                </div>
            </div>
            <div class="row gy-2 mb-4">
                <label class="col-sm-4 form-label text-end mt-3" for="email">Email</label>
                <div class="col-sm-8">
                    <input class="form-control" id="email" type="email" placeholder="Email">
                {{-- <small class="form-text">Example help text that remains unchanged.</small> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row gy-2 mb-4">
                <label class="col-sm-4 form-label text-end mt-3" for="user_name">
                    User Name
                </label>
                <div class="col-sm-8">
                    <input class="form-control" id="user_name" type="text" placeholder="User Name">
                </div>
            </div>
            <div class="row gy-2 mb-4">
                <label class="col-sm-4 form-label text-end mt-3" for="role">
                    Role
                </label>
                <div class="col-sm-8">
                    <select class="form-select" id="role"></select>
                </div>
            </div>
        </div>
    </div>   
</form>

<script>
    const form = document.getElementById('form-horizontal');
   
    function constructForm(data, id, label, type){
        if(type == 'edit' && data.id_harian !== undefined){
            
            const dataEdit = constructDataEdit(data, 'templateGaji');
            const labelEdit = constructLabel(label);
            buildForm(dataEdit, labelEdit);
        }else if(type == 'edit'){
            const dataEdit = constructDataEdit(data, '');
            const labelEdit = constructLabel(label);
            buildForm(dataEdit, labelEdit);
        } else if(type == 'add'){
            const dataAdd = constructAddBarang();
            const labelAdd =  constructLabel(label);
            buildForm(dataAdd, labelAdd);
        } else if(type == 'delete'){
            const dataDelete = constructDelete(id);
            const labelDelete = constructLabelDelete(label);
            buildForm(dataDelete, labelDelete);
        }
    }

    function constructDelete(id){
        const result = [
            {
                type : 'input',
                classes : ['form-control'],
                attr :  {
                    id : 'id',
                    name : 'id', 
                    type : 'text'
                },
                value : id
            }
        ]
        return result;
    }
    function constructLabelDelete(label) {
        const result = [
            {
                type : 'label',
                classes : ['col-sm-4', 'form-label', 'text-end', 'mt-3'],
                attr : {
                    for : 'id',
                },
                html : '#'
            }
        ];
        return result;
    }

    function constructAddBarang(){
        const satuan = [];
        m_satuan.forEach(data => {
            let childObj = {
                type : 'option',
                value : data.id,
                html : data.satuan_name
            };               
            satuan.push(childObj);
        })
        const result = [
            {
                type : 'input',
                classes : ['form-control'],
                attr :  {
                    id : 'nama_barang',
                    name : 'nama_barang', 
                    type : 'text'
                },
            },
            {
                type : 'select',
                classes : ['form-control'],
                attr :  {
                    id : 'id_satuan',
                    name : 'id_satuan'
                },
                childObj : satuan
            },
            {
                type : 'input',
                classes : ['form-control'],
                attr :  {
                    id : 'harga',
                    name : 'harga', 
                    type : 'text'
                }
            }
        ];

        return result;
    }

    function constructLabel(label){
        let result =[];
        result = label.map(data => {
            return {
                type : 'label',
                classes : ['col-sm-6', 'form-label', 'text-end', 'mt-3'],
                attr : {
                    for : data,
                },
                html : data
            }
        })
        return result;
    }
    function buildForm(data, label){
        
        form.innerHTML = '';
        const templateForm = settingForm();
        let buildRowHeader = buildObject(form, templateForm.dataRowHeader);
        
        if(data.length >4   ){
            buildRowDevider = buildObject(buildRowHeader, templateForm.dataRowDevider);
            let x=0;
            for(let i = 0; i < data.length; i++){
                
                if(x == 4) {
                    buildRowDevider = buildObject(buildRowHeader, templateForm.dataRowDevider);
                    x = 0;
                }
                let buildWraperInput = buildObject(buildRowDevider, templateForm.dataWraperInput);
                if(label[i].html == '#') buildWraperInput.style.display = 'none';
                let buildLabel = buildObject(buildWraperInput, label[i]);
                let buildDivInput = buildObject(buildWraperInput, templateForm.dataDivInput);
                let buildInput = buildObject(buildDivInput, data[i]);
                x = x+1;
            }
        } else {
            for(let i = 0; i < data.length; i++){
               
                let buildWraperInput = buildObject(buildRowHeader, templateForm.dataWraperInput);
                
                if(label[i].html == '#') buildWraperInput.style.display = 'none';
                let buildLabel = buildObject(buildWraperInput, label[i]);
                let buildDivInput = buildObject(buildWraperInput, templateForm.dataDivInput);
                let buildInput = buildObject(buildDivInput, data[i]);
            }
            
        }
    }
    

    function constructDataEdit(data, forWho) {
        
        let dataEdit = [];
        
        if(forWho == 'templateGaji'){
            dataEdit = [
                {
                    type : 'input',
                    classes: ['form-control'],
                    attr :  {
                        id : 'id',
                        name : 'id', 
                        type : 'text'
                    },
                    value : data['id']
                },
                {
                    type : 'select',
                    classes : ['form-select', 'idRelGaji'],
                    attr :  {
                        id : 'id_rel_gaji',
                        name : 'id_rel_gaji',
                    },
                    childObj : allRel.map(data_ => {
                        let childObj = {
                            type : 'option',
                            value : data_.id,
                            html : data_.name_rel_gaji
                        };
                        
                        if(data_.id == data['id']) {
                            childObj.attr = {selected : 'selected'} 
                        }                        
                        return childObj;
                    })
                },
                {
                    type : "input",
                    classes : ['form-check-input', 'mt-2', 'ml-1'],
                    attr :  {
                        id : "",
                        name : "id_m_assy", 
                        type : 'checkbox',
                        disabled : 'disabled'
                        
                    },
                    value : data['id_m_assy']
                },        
                {
                    type : "input",
                    classes : ['form-control'],
                    attr :  {
                        id : "",
                        name : "id_m_lembur", 
                        type : 'text',
                        disabled : 'disabled'
                    },
                    value : toRp(data['nominal_lembur'])
                }, 
                {
                    type : "input",
                    classes : ['form-control'],
                    attr :  {
                        id : "",
                        name : "id_m_harian", 
                        type : 'text',
                        disabled : 'disabled'
                    },
                    value : toRp(data['nominal_harian'])
                },   
                {
                    type : "input",
                    classes : ['form-control'],
                    attr :  {
                        id : "",
                        name : "id_m_makan", 
                        type : 'text',
                        disabled : 'disabled'
                    },
                    value : toRp(data['nominal_makan'])
                },            
            ];
            if(dataEdit[2].value == '1000') dataEdit[2].attr.checked = 'checked';
                
             
        }else if(head == 'Data Barang'){
            dataEdit = [
                {
                    type : 'input',
                    attr :  {
                        id : 'id',
                        name : 'id', 
                        type : 'text'
                    },
                    value : data['id']
                },
                {
                    type : "input",
                    classes : ['form-control'],
                    attr :  {
                        id : "nama_barang",
                        name : "nama_barang", 
                        type : 'text'
                    },
                    value : data["nama_barang"]
                },
                {
                    type : 'input',
                    classes : ['form-control'],
                    attr :  {
                        id : "harga",
                        name : "harga", 
                        type : 'text'
                    },
                    value : data["harga"]
                },
                {
                    type : 'select',
                    classes : ['form-select'],
                    attr :  {
                        id : "id_satuan",
                        name : "id_satuan", 
                    },
                    childObj : m_satuan.map(data_ => {
                        let childObj = {
                            type : 'option',
                            value : data_.id,
                            html : data_.satuan_name
                        };
                        
                        if(data_.satuan_name == data['satuan_name']) {
                            childObj.attr = {selected : 'selected'}
                            
                        }                        
                        return childObj;
                    })
                },
            
            ];
            
        } else if(head == 'Data Karyawan') {
           
            dataEdit = [
                {
                    type : 'input',
                    attr :  {
                        id : 'id',
                        name : 'id', 
                        type : 'text'
                    },
                    value : data['id']
                },
                {
                    type: 'input',
                    classes : ['form-control'],
                    value : data['nama'],
                    attr: {
                        id: 'nama',
                        name: 'nama', 
                    }
                },
                {
                    type: 'input',
                    classes : ['form-control'],
                    value : data['npwp'],
                    attr: {
                        id: 'npwp',
                        name: 'npwp', 
                    }
                },
                {
                    type: 'select',
                    classes : ['form-select'],
                    attr : {
                        id :'id_perkawinan',
                        name : 'id_perkawinan',
                    },
                    childObj : status_perkawinan.map(data_ => {
                        return {
                            type : 'option',
                            value : data_.id,
                            attr : (data_.id == data.id_perkawinan) ? {selected :'selected'} : {},
                            html : data_.status_name
                        }
                    })
                },
                {
                   type: 'select',
                    classes : ['form-select'],
                    attr : {
                        id :'id_departement',
                        name : 'id_departement',
                    },
                    childObj : departement.map(data_ => {
                        return {
                            type : 'option',
                            value : data_.id,
                            attr : (data_.id == data.id_departement) ? {selected :'selected'} : {},
                            html : data_.departement_name
                        }
                    })
                },
                {
                   type: 'input',
                    classes : ['form-control'],
                    attr : {
                        id :'id_gapok',
                        name : 'id_gapok',
                    },
                    value : (data['nominal'] !== null) ? toRp(data['nominal']) : ''
                }
                
            ];
            
        }
        
        return dataEdit;
    }

    function settingForm(){
        return {
            dataRowHeader : {
                type : 'div',
                classes : ['row']
            },
            dataRowDevider : {
                type : 'div',
                classes : ['col-sm-6']
            },
            dataWraperInput : {
                type: 'div',
                classes : ['row', 'gy-2', 'mb-2']
            },
            dataLabelInput : {
                type : 'label',
                classes : ['col-sm-4', 'form-label', 'text-end', 'mt-3'],
                attr : {
                    for : "first_name",
                },
                html : "First Name"
            },
            dataDivInput : {
                type : 'div',
                classes : ['col-sm-6'],
            },
            dataInput : {
                type : 'input',
                classes : ['form-control'],
                attr : {
                    id : "first_name", 
                    type : "text",
                    placeHolder :"First Name" 
                },
                dataSet : {
                    id : 1,
                    value :10
                },
                value : 'Ega'
            }
        }
    }


    



</script>