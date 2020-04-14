<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cost', 'url', 'vendor_id', 'description', 'name'
    ];

    /**
     * Return the Vendor associated with this product.
     *
     * @var array
     */
    public function vendor() {
    	return $this->belongsTo('App\Vendor');
    }

    /**
     * The attributes and titles that are displayed on the front end.
     *
     * @var array
     */
    public function fields() {
    	return [['name' => 'name', 
                 'title' => 'Name',
                 'value' => $this->name,
                 'blade' => 'components.inputs.text'],
                ['name' => 'url', 
                 'title' => 'Product URL',
                 'value' => $this->url,
                 'blade' => 'components.inputs.url'],
                ['name' => 'cost', 
                 'title' => 'Cost Per Unit',
                 'value' => $this->cost,
                 'blade' => 'components.inputs.money'],
                ['name' => 'description', 
                 'title' => 'Description',
                 'value' => $this->description,
                 'blade' => 'components.inputs.text'],
                ['name' => 'vendor_id', 
                 'title' => 'Vendor',
                 'value' => $this->vendor_id,
                 'blade' => 'components.inputs.text']];
    }
}
