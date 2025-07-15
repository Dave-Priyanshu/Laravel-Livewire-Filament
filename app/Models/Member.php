<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =[
        'name',
        'email',
        'designation',
        'insta_url',
        'linkd_url',
        'image',
        'status',
    ];
}
