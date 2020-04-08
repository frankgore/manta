<div class="form-group">
	<label for={{ $field['name'] }} >{{ __($field['title']) }}</label>
	
	<input name={{ $field['name']  }} value="{{ $field['value'] }}" type="number" min="0.00" step="0.01" class="@error($field['name']) is-invalid @enderror">

	@error($field['name'])
	    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
</div>