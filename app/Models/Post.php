<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'title','pet_name','lost_date','status_id','description','user_id','long','lat','lost_address','description'
    ];

    public function images() {
        return $this->hasMany(PostImage::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
