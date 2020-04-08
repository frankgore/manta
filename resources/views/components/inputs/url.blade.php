<div class="form-group">
	<label for={{ $field['name'] }} >{{ __($field['title']) }}</label>
	
	<input name={{ $field['name']  }} value="{{ $field['value'] }}" type="url" class="@error($field['name']) is-invalid @enderror">

	@error($field['name'])
	    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
</div>