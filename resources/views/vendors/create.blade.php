@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Vendor</div>

                <div class="card-body">
                    <form action="{{ action('VendorController@store') }}" method="POST" >
                        @csrf
                        @foreach ($fields as $field)
                            @include('components.textinput', ['id' => $field['id'], 
                                                              'title' => $field['title']])
                        @endforeach
                        <button type="submit" class="btn btn-outline-primary">{{__('Submit Vendor')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
