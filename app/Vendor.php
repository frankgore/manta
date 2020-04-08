<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'halo_identifier'
    ];

    /**
     * Get the products for this vendor.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * The attributes and titles that are displayed on the front end.
     *
     * @var array
     */
    public function fields() {
    	return [['name' => 'name', 
                 'title' => 'Vendor Name',
                 'value' => $this->name],
                ['name' => 'halo_identifier', 
                 'title' => 'Halo Identifier',
                 'value' => $this->halo_identifier]];
    }
}
