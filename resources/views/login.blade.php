<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Compperindo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href='{{URL::asset("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700")}}'>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src={{ URL::asset('/js/jquery-3.2.1.min.js') }}></script> 
  </head>
  <body>
    <div class="login-page d-flex align-items-center bg-gray-100">
      <div class="container mb-3">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card">
              <div class="card-body p-5">
                <header class="text-center mb-5">
                  <h1 class="text-xxl text-gray-400 text-uppercase"><strong class="text-primary">Compperindo</strong></h1>
                </header>
                <form class="login-form" method="POST" action="/login">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="row">
                    <div class="col-lg-7 mx-auto">
                      <div class="input-material-group mb-3">
                        <input class="input-material" id="user_name" type="text" name="user_name" autocomplete="off" >
                        <label class="label-material" for="user_name">Username</label>
                      </div>
                      <div class="input-material-group mb-4">
                        <input class="input-material" id="passwords" type="password" name="passwords" required >
                        <label class="label-material" for="passwords">Password</label>
                      </div>
                    </div>
                    <div class="col-12 text-center">       
                      <button class="btn btn-primary mb-3" id="login" type="submit">Login</button><br>
                      {{-- <a class="text-xs text-paleBlue" href="#!">Forgot Password?  </a><br><span class="text-xs mb-0 text-gray-500">Do not have an account?  </span><a class="text-xs text-paleBlue ms-1" href="register.html"> Signup</a> --}}
                      <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center position-absolute bottom-0 start-0 w-100 z-index-20">
       
      </div>
    </div>
  
   
    <!-- JavaScript files-->
    <script src='{{URL::asset("template/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/chart.js/Chart.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/just-validate/js/just-validate.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/choices.js/public/assets/scripts/choices.min.js")}}'></script>
    <script src='{{URL::asset("template/vendor/overlayscrollbars/js/OverlayScrollbars.min.js")}}'></script>
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
      injectSvgSprite("https://bootstraptemple.com/files/icons/orion-svg-sprite.svg"); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.7.1/css/all.css' integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    @include('layout.response')
    
     
   
  </body>
</html>