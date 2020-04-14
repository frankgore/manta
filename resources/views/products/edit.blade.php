@extends('layouts.app')

@section('content')

@include('components.edit', 
         ['object' => $product, 
          'back' => 'products.index',
          'delete' => 'products.remove',
          'update' => 'products.update'])

@endsection