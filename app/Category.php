<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function post(){
    	require $this->hasMany(Post::class);
    }
}
