<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentImages extends Model
{
    public $fillable = [
        'path','comment_id'
    ];
}
