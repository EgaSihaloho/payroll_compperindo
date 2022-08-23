@extends('layout.layout')
@section('content')
    
    @include('microlayout.breadcrumb')
    @include('microlayout.head')
    @include('microlayout.tables')
     

    {{-- <script type="text/javascript" src="{{ URL::asset('DataTables/js/jquery.dataTables.min.js')}}"></script> --}}

@endsection