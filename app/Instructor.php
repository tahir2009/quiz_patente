<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'admin_id', 'first_name','last_name','email','password','phone'
    ];

}
