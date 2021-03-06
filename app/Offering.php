<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price'
    ];
}
