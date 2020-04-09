<div class="form-group">
	<label for={{ $field['name'] }} >{{ __($field['title']) }}</label>
	
	<select name={{ $field['name'] }} class="@error($field['name']) is-invalid @enderror">

	@foreach ($options as $key => $name)
		<option value="{{ $key }}">{{ $name }}</option> 
	@endforeach
	
	</select>
	@error($field['name'])
	    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
</div>