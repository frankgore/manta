@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Product</div>

    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST" >
            @csrf
            @foreach ($fields as $field)
                @switch($field['name'])
                    @case('cost')
                        @include('components.moneyinput', ['field' => $field])
                        @break
                    @default
                        @include('components.textinput', ['field' => $field])
                    @endswitch    
            @endforeach
            <button type="submit" class="btn btn-outline-primary">{{__('Submit Product')}}</button>
        </form>
    </div>
</div>

@endsection
