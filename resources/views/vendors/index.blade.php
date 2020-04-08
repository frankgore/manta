@extends('layouts.app')

@section('content')
@include('components.index', ['objects' => $vendors, 
                              'object_name' => 'Vendors', 
                              'route' => 'vendors.show'])
@endsection
 