<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable=[
        'customer_id',
        'category',
        'description',
        'acquired_value',
        'acquired_date',
        'asset_type',
		'salvage_value',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
