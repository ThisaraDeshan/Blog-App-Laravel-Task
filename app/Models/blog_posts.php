<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'parent_id',
        'title',
        'mega_title',
        'slug',
        'summery',
        'published'
    ];
}
