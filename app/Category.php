<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $fillable = [
        'name',
        'slug',
        'body',
    ];

    Public function posts(){
        return $this->hasMany(Post::class);
    }
}
