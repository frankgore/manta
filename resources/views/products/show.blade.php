@extends('layouts.app')

@section('content')

@include('components.show', 
         ['object' => $product, 
          'back' => 'products.index',
          'edit' => 'products.edit']);

@endsection