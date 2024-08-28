<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Notifiable;
    // protected $table = 'posts';
    // protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'author', 'slug', 'content'];

}