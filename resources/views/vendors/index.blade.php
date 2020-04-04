@extends('layouts.app')

@section('content')
@if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
@endif

<table class="table table-striped">
  <caption>List of Vendors</caption>
    @foreach ($vendors as $vendor)
      @php
        $fields = $vendor->fields();
      @endphp
      @if($loop->first)
        <thead>
          <tr>
            @foreach($fields as $field)
              <th scope="col">{{ $field['title'] }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
      @endif  
        <tr>
        @foreach($fields as $field)
            @if($loop->first)
              <th scope="row">
                <a href="{{ route('vendors.show', $vendor) }}">
                  {{ $field['value'] }}  
                </a>
              </th>
            @else
              <td>{{ $field['value'] }}</td>
            @endif
        @endforeach
        </tr>
      @if($loop->last)
        </tbody>
      @endif
    @endforeach
</table>
{{ $vendors->links() }}
@endsection
