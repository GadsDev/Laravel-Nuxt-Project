<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title'];
    //Pertence á um user
    public function user() {
        return $this->belongsTo(User::class);
    }
    //Tem varios posts
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
