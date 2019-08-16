<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'posts';

    protected $fillable = ['id', 'user_id', 'title', 'content'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function comments()
    {
        return $this->hasMany('App\Collections\Comment');
    }
}
