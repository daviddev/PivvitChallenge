<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'offering_id', 'quantity', 'total'
    ];

    public function offering()
    {
    	return $this->hasOne('App\Offering', 'id', 'offering_id');
    }
}
