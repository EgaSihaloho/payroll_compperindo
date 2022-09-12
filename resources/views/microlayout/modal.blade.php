<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      @include('microlayout.custom_nav')
      <div class="modal-body" id = "modal-body">
        
        @include('microlayout.form')
      </div>
      <div class="modal-footer text-end">
        <button type="button" class="btn btn-primary btn-sm" id="save-modal" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>
<button style="display: none" id="btnModal" data-bs-toggle="modal" data-bs-target ="#exampleModal"></button>

<script>
  const btnModal = document.querySelector("#btnModal");
  const modalTitle = document.querySelector(".modal-title");
  const divFooter =  document.querySelector('.modal-footer');
  const modalBody = document.querySelector('.modal-body');

  function constructModal(type, data) {
    modalTitle.innerHTML = data.title;
    removeBtn();
    setBtn('save', type);
    const info = document.querySelectorAll('.info');
    if(info !== null) {
      info.forEach(data => {
        data.remove();
      });
    }
    if(type == 'delete') {
      
      buildObject(modalBody,{
        type : 'div',
        classes : ['text-center', 'text-danger', 'info'],
        childObj :[
          {
            type: 'h3',
            html : 'Are You Sure Delete This Data ?'
          }
        ]
      });
    }
   
  }

  function removeBtn(){
    divFooter.innerHTML = '';
  }

  function setBtn(data, type){
    let link = '';
    if(type == 'edit') link = 'http://localhost:8000/editBarang';
    if(type == 'add')  link = 'http://localhost:8000/addBarang';
    if(type == 'delete')  link = 'http://localhost:8000/deleteBarang';
    const setBtn = {
      type : 'button',
      classes : ['btn', 'btn-primary', 'btn-sm'],
      attr :  {
          id : 'save-modal'
      },
      html : 'Save changes',
      dataSet : {
        bsDismiss : 'modal',
        url : link
      }
    };
    setBtn.classes.push(data);
    buildObject(divFooter, setBtn);
  }




</script>