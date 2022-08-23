 <!-- Breadcrumb-->
      <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
                @foreach($breadCrumb as $key => $val)
                    @if($key ='Main')
                        <li class="breadcrumb-item"><a class="fw-light" href="{{$val[0]->url}}">{{$val[0]->menu_name}}</a></li>
                    @else
                        <li class="breadcrumb-item active fw-light" aria-current="page">
                            <a href="{{$val[0]->url}}">{{$val[0]->menu_name}}</a></li>
                    @endif
                @endforeach
             
            </ol>
          </nav>
        </div>
      </div>