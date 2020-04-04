<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vendors</div>
                <div class="card-body">
                    <a class="card-link" href="{{ action('VendorController@create') }}" >{{ __('Add Vendor') }}</a>
                    <a class="card-link" href="{{ action('VendorController@index') }}" >{{ __('List Vendors') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>