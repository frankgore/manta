@extends('layouts.app')

@section('content')
@include('components.index', 
         ['objects' => $products, 
          'object_name' => 'Products', 
          'route' => 'products.show'])
@endsection
