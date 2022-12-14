<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Compperindo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href='{{URL::asset("template/vendor/choices.js/public/assets/styles/choices.min.css")}}'>
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href='{{URL::asset("template/vendor/overlayscrollbars/css/OverlayScrollbars.min.css")}}'>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href='{{URL::asset("template/css/style.default.css")}}' id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href='{{URL::asset("template/css/custom.css")}}'>
    <!-- Favicon-->
    {{-- <link rel="shortcut icon" href='{{URL::asset("template/img/favicon.ico")}}'> --}}
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!--Toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src={{ URL::asset('/js/jquery-3.2.1.min.js') }}></script> 
    <link rel="stylesheet" href="{{ URL::asset('/fontawesome-free/css/all.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/css/jquery.dataTables.min.css') }}"> --}}
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  </head>
  <body>
    <input type="text" style="display:none" value="{{csrf_token()}}" id="tokenComperindo">
    <script>const user = JSON.parse('{!! json_encode(session("user")) !!}');</script>
    <script src='{{URL::asset("js/eventListener.js")}}'></script>
    <script src='{{URL::asset("js/buildObject.js")}}'></script>
    <script src="{{URL::asset('js/ajaxData.js')}}"></script>
    <script src='{{URL::asset("js/responseToastr.js")}}'></script>
    <script src="{{URL::asset('js/customize.js')}}"></script>
    <script src="{{URL::asset('js/loading.js')}}"></script>
    <!-- Side Navbar -->
    @include('layout.sidebar')
    <div class="page">
      @include('layout.navbar')
      @yield('content')
      @include('layout.footer')
    </div>
    <!-- JavaScript files-->
     @include('layout.response')
    
   
   
    </script>
    <script src='{{URL::asset("template/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
    {{-- <script src='{{URL::asset("template/vendor/chart.js/Chart.min.js")}}'></script> --}}
    <script src='{{URL::asset("template/vendor/just-validate/js/just-validate.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/choices.js/public/assets/scripts/choices.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/overlayscrollbars/js/OverlayScrollbars.min.js")}}'></script>
    {{-- <script src='{{URL::asset("template/js/charts-home.js")}}'></script> --}}
    <!-- Main File-->
    <script src='{{URL::asset("template/js/front.js")}}'></script>

    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
  </body>
</html>