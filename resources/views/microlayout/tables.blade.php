 <section class="tables">   
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        @include('microlayout.search')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-sm mb-0 table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        @foreach ($keyTable as $key)
                                            @if($key !== 'id')
                                                <th>{{$key}}</th>
                                            @endif
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataTable as $key => $value)
                                        <tr>
                                            <td>{{$key+1+(($dataTable->currentPage()-1)*$dataTable->perPage())}}</td>
                                            @foreach($keyTable as $keys)
                                                @if($keys !== 'id')
                                                    <td>{{$value->$keys}}</td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                {{$dataTable->links("pagination::bootstrap-4")}}
                            </div>
                            <div class="col-lg-6 text-right">
                                <p class="text-gray-600">
                                    Showing {{(($dataTable->currentPage()-1)*$dataTable->perPage())+1}} to {{(($dataTable->currentPage()-1)*$dataTable->perPage())+sizeof($dataTable)}} from {{$dataTable->total()}} entries
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>