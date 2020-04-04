<div class="form-group">
	<label for={{ $id  }} >{{ __($title) }}</label>

	<input id={{ $id  }}  type="text" class="@error($id) is-invalid @enderror">

	@error($id)
	    <div class="alert alert-danger">{{ $message }}</div>
	@enderror
</div>