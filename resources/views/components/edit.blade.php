<div class="card">
    <div class="card-header">Edit Vendor</div>
    <div class="card-body">
        <form action="{{ route($update, $object) }}" method="POST" >
            @csrf
            @method('PATCH')
            @foreach ($object->fields() as $field)
                @include($field['blade'], ['field' => $field])
            @endforeach
            <div class="row justify-content-around">
                <a href="{{ route($back, $object) }}" class="btn btn-primary">
                    {{__('Back')}}
                </a>
                <button type="submit" class="btn btn-primary">
                    {{__('Submit Edit')}}
                </button>
                <a href="{{ route($delete, $object) }}" class="btn btn-outline-danger">{{__('Delete Vendor')}}</a>
            </div>
        </form>

    </div>
</div>
