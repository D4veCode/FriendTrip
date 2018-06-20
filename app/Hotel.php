<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'price', 'name', 'location', 'room_type', 'description', 'image'
    ];
}
