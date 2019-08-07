<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 
        'slug',
    ];
    
    Public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
