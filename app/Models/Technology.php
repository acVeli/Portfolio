<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'skills_category_id', 'pourcentage'];

    public function category()
    {
        return $this->belongsTo(SkillsCategory::class, 'skills_category_id');
    }
}
