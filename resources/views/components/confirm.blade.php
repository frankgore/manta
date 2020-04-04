@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Are you sure?</div>
    <div class="card-body">
        <form action="{{ action($confirm, $object) }}" method="POST" >
            @method($method)
            @csrf
            <div class="row justify-content-around">
                <input type="submit" class="btn btn-danger" value="{{ $button }}"></input>
                <a href="{{ action($cancel) }}" class="btn btn-outline-primary" >
                    {{ __('Cancel') }}
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
