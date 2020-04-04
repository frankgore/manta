@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Vendor</div>

    <div class="card-body">
        <form action="{{ action('VendorController@store') }}" method="POST" >
            @csrf
            @foreach ($fields as $field)
                @include('components.textinput', ['field' => $field])
            @endforeach
            <button type="submit" class="btn btn-outline-primary">{{__('Submit Vendor')}}</button>
        </form>
    </div>
</div>

@endsection
