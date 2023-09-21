<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_post_tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'tag_id'
    ];
}
