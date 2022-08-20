 <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src='{{URL::asset("template/img/favicon.ico")}}'avatar-7.jpg" alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">Nathan Andrews</h2>
          <p class="text-sm mb-0 text-muted">Web Developer</p>
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">BD</p></a>
      </div>
      <!-- Sidebar New -->
      @foreach ($sideBar as $side => $valueSide)
          <span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">
            {{$side}}
          </span>
          <ul class="list-unstyled">
            <li class="sidebar-item"><a class="sidebar-link" href="#{{$side}}" data-bs-toggle="collapse"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#browser-window-1"> </use>
                </svg>{{$side}} </a>
              <ul class="collapse list-unstyled " id="{{$side}}">
                @foreach ($valueSide as $subMenu)
                    <li><a class="sidebar-link" href="#">{{$subMenu->menu_name}}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
      @endforeach
    </nav>