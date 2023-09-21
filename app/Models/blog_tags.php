<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'content'
    ];
}
