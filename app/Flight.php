<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'num_flight', 'date_dep', 'date_des', 'destination', 'airline', 'price', 'airline_image'
    ];
}
