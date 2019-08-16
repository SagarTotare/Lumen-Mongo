<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
    // protected $primaryKey = '_id';

    protected $fillable = [
        "name", "mobile", "email", "password",
    ];

    protected $hidden   = ["password", 'created_at', 'updated_at'];
}
