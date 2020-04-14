@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Product</div>

    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST" >
            @csrf
            @foreach ($fields as $field)
                @include($field['blade'], $field)   
            @endforeach
            <button type="submit" class="btn btn-outline-primary">{{__('Submit Product')}}</button>
        </form>
    </div>
</div>

@endsection