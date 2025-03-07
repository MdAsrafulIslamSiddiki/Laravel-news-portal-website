<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $fillable = [
        "news_title",
        "image",
        "short_details",
        "category",
        "views"
    ];
}
