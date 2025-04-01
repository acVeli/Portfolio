<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = [
        'image',
        'image_author',
        'image_author_link',
        'title',
        'description',
        'tags',
        'project_link',
        'github_link'
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
