<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        'slug',
        'content',
        'image',
        'catagory_id',
        'user_id',
        'is_active'
    ];
}
