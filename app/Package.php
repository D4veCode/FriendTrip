<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'destination', 'duration', 'price', 'capacity', 'description', 'date_dep', 'date_des', 'image'
    ];
}
