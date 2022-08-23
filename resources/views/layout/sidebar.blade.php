 <nav class="side-navbar">
      <!-- Sidebar Header    -->
      <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img class="img-fluid rounded-circle avatar mb-3" src='{{URL::asset("template/img/orang.jpg")}}' alt="person">
          <h2 class="h5 text-white text-uppercase mb-0">
            {{ucfirst(session("user")->first_name)}} {{ucfirst(session("user")->last_name)}}
          </h2>
          {{-- <p class="text-sm mb-0 text-muted">Web Developer</p> --}}
        </div>
        <!-- Small Brand information, appears on minimized sidebar--><a class="brand-small text-center" href="index.html">
          <p class="h1 m-0">CP</p></a>
      </div>
      <!-- Sidebar New -->
      @foreach (session('sideBar') as $side => $valueSide)
          @if($side == 'Main')
            @foreach ($valueSide as $subMenu)
              <ul class="list-unstyled">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{$subMenu->url}}">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                      <use xlink:href="#{{$subMenu->icon}}"> </use>
                    </svg>
                    <b>{{$subMenu->menu_name}}</b>
                  </a>
                </li>
              </ul>
            @endforeach
          @else
            <ul class="list-unstyled">
              <li class="sidebar-item"><a class="sidebar-link" href="#{{$side}}" data-bs-toggle="collapse"> 
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                  </svg>
                  {{$side}} </a>
                <ul class="collapse list-unstyled " id="{{$side}}">
                  @foreach ($valueSide as $subMenu)
                      <li>
                        <a class="sidebar-link" href="{{$subMenu->url}}">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                            <use xlink:href="#{!!$subMenu->icon!!}"> </use>
                          </svg>
                          {{$subMenu->menu_name}}
                        </a>
                      </li>
                  @endforeach
                </ul>
              </li>
              
            </ul>
          @endif
          
      @endforeach
         
      
     
    </nav>