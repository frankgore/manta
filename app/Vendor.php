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
        'name', 'halo_id'
    ];

    /**
     * The attributes and titles that are displayed on the front end.
     *
     * @var array
     */
    public function fields() {
    	return [['name' => 'name', 
                 'title' => 'Vendor Name',
                 'value' => $this->name],
                ['name' => 'halo_id', 
                 'title' => 'Halo Identifier',
                 'value' => $this->halo_id]];
    }
}
