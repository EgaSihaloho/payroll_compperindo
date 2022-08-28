function showResponse(head, desc, type) {
  setTimeout(function () {
    toastr.options = {
      closeButton: true,
      progressBar: true,
      showMethod: "slideDown",
      timeOut: 20000,
    };
    type === true ? toastr.success(head, desc) : toastr.error(head, desc);
  }, 300);
}
