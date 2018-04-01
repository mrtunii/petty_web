<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    public $fillable = [
        'post_id','path'
    ];
}
