@extends('layouts.app')

@section('content')

<div class="card">
    <ul class="list-group">
    	@foreach($vendor->fields() as $field)
  	      <li class="list-group-item">{{ $field['title'] }}: {{ $field['value'] }}</li>
        @endforeach
        <li class="list-group-item">
        <div class="row justify-content-around">
          <a class="btn btn-primary" href={{ action('VendorController@index') }}>
              {{ __('Back') }}
          </a>
  	      <a class="btn btn-primary" href={{ action('VendorController@edit', $vendor) }}>
              {{ __('Edit Vendor') }}
          </a>
        </div>
      </li>
    </ul>
</div>

@endsection