<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'slug',
        'excerpt',
        'body',
        'status',
        'file',
    ];

    Public function user(){
        return $this->belongsTo(User::class);
    }

    Public function category(){
        return $this->belongsTo(Category::class);
    }

    Public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
