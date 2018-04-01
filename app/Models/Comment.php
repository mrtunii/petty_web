<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
        'user_id','lat','long','post_id','description','image_path','seen_date','seen_address'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }



}
