  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 @if(session('response'))
  @if(session('response')->code == '99')
    <script>
        setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 20000,
                    };
                    toastr.error("{{session('response')->header}}", "{{session('response')->desc}}");
                }, 300);
    </script>
  @elseif(session('response')->code == '00')
  <script>
        setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 20000,
                    };
                    toastr.success("{{session('response')->header}}", "{{session('response')->desc}}");
                }, 300);
    </script>
  @endif
@endif