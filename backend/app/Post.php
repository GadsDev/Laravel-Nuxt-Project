<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body'];
    //Pertence á um user
    public function user() {
        return $this->belongsTo(User::class);
    }
    //Pertence á um user
    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}
