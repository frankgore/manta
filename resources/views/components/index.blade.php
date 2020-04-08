@if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
@endif

<table class="table table-striped">
  <caption>List of {{ $object_name }}</caption>
    @foreach ($objects as $object)
      @php
        $fields = $object->fields();
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
                <a href="{{ route($route, $object) }}">
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
{{ $objects->links() }}