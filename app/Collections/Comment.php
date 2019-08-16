<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'comments';

    protected $fillable = ['id', 'post_id', 'user_id', 'content'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function post()
    {
        return $this->belongsTo('App\Collections\Post');
    }
}
