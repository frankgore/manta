@extends('layouts.app')

@section('content')

@include('components.edit', 
         ['object' => $vendor, 
          'back' => 'vendors.index',
          'delete' => 'vendors.remove',
          'update' => 'vendors.update'])

@endsection