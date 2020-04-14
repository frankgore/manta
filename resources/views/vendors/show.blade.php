@extends('layouts.app')

@section('content')

@include('components.show', 
         ['object' => $vendor, 
          'back' => 'vendors.index',
          'edit' => 'vendors.edit']);

@endsection