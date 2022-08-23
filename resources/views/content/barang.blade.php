@extends('layout.layout')
@section('content')
    
    <!-- Breadcrumb-->
      <div class="bg-gray-200 text-sm">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 py-3">
              <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
              <li class="breadcrumb-item active fw-light" aria-current="page">Tables  </li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Page Header-->
      <header class="py-4">
        <div class="container-fluid py-2">
          <h1 class="h3 fw-normal mb-0">Tables</h1>
        </div>
      </header>
      <section class="tables">   
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Basic Table</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th class="border-bottom-0" scope="row">3</th>
                          <td class="border-bottom-0">Larry</td>
                          <td class="border-bottom-0">the Bird</td>
                          <td class="border-bottom-0">@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Striped Table</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0 table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th class="border-bottom-0" scope="row">3</th>
                          <td class="border-bottom-0">Larry</td>
                          <td class="border-bottom-0">the Bird</td>
                          <td class="border-bottom-0">@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Striped table with hover effect</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0 table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th class="border-bottom-0" scope="row">3</th>
                          <td class="border-bottom-0">Larry</td>
                          <td class="border-bottom-0">the Bird</td>
                          <td class="border-bottom-0">@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-bottom">
                  <h3 class="h4 mb-0">Compact Table</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-sm mb-0 table-striped table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th class="border-bottom-0" scope="row">3</th>
                          <td class="border-bottom-0">Larry</td>
                          <td class="border-bottom-0">the Bird</td>
                          <td class="border-bottom-0">@twitter</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     

    {{-- <script type="text/javascript" src="{{ URL::asset('DataTables/js/jquery.dataTables.min.js')}}"></script> --}}

@endsection