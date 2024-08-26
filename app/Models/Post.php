<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posts';
    // protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'author', 'slug', 'content'];

}