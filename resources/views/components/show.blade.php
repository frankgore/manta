@extends('layouts.app')

@section('content')

<div class="card">
    <ul class="list-group">
    	@foreach($object->fields() as $field)
  	      <li class="list-group-item">{{ $field['title'] }}: {{ $field['value'] }}</li>
        @endforeach
        <li class="list-group-item">
        <div class="row justify-content-around">
          <a class="btn btn-primary" href="{{ route($back) }}">
              {{ __('Back') }}
          </a>
  	      <a class="btn btn-primary" href="{{ route($edit, $object) }}">
              {{ __('Edit object') }}
          </a>
        </div>
      </li>
    </ul>
</div>

@endsection