<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articale extends Model
{
    protected $fillable =[
        'title',
        'category_id',
        'author',
        'image',
        'content',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
