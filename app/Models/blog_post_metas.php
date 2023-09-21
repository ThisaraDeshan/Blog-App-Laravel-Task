<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_post_metas extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'key',
        'content'
    ];
}
