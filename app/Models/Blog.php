<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'featured_image',
        'author_name',
        'category',
        'tags',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'views',
    ];

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'date',
        'created_at' => 'datetime',
    ];
}
