<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Modelid
{
    protected $fillable = ['title', 'content', 'category_id'];
    protected $table = 'posts';
}
