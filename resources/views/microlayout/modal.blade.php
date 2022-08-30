<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
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
</script>