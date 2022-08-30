
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
    function constructRowHeader(appendTo){
        const row = document.createElement('div');
        row.classList.add("row");
        appendTo.appendChild(row);
    }
    function constructRowDevider(appendTo,col){
        const rowDevider = document.createElement('div');
        rowDevider.classList.add("col-lg="+col);
         appendTo.appendChild(rowDevider);
    }
    function constructWraperInput(appendTo){
        const wraperInput = document.createElement('div');
        wraperInput.classList("row gy-2 mb-4");
        appendTo.appendChild(wraperInput);
    }
    function constructLabelInput(appendTo, to, text){
        const labelInput = document.createElement('label');
        labelInput.classList.add('col-sm-4', 'form-label', 'text-end', 'mt-3');
        labelInput.setAttribute('for',to);
        labelInput.innerHTML = text;
        appendTo.appendChild(labelInput);
    }
    function constructDivInput(appenddTo){
        const divInput = document.createElement('div');
        divInput.classList.add('col-sm-8');
        appenddTo.appendChild(divInput);
    }
    function constructInput(appenddTo){
        
    }



</script>