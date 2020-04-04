@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Edit Vendor</div>
    <div class="card-body">
        <form action="{{ route('vendors.update', $vendor) }}" method="POST" >
            @csrf
            @method('PATCH')
            @foreach ($vendor->fields() as $field)
                @include('components.textinput', ['field' => $field])
            @endforeach
            <div class="row justify-content-around">
                <a href="{{ route('vendors.show', $vendor) }}" class="btn btn-primary">
                    {{__('Back')}}
                </a>
                <button type="submit" class="btn btn-primary">
                    {{__('Submit Edit')}}
                </button>
                <a href="{{ route('vendors.remove', $vendor) }}" class="btn btn-outline-danger">{{__('Delete Vendor')}}</a>
            </div>
        </form>

    </div>
</div>

@endsection
