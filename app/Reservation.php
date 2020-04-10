<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'fname','lname', 'email', 'phone_number', 'guest_number', 'time'
    ];
}
