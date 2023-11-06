<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    // usersテーブルとの多対多リレーション
    public function users()
    {
        return $this->belongsToMany(User::class, 'comments_users', 'comment_id', 'user_id');
    }

    // postsテーブルとの多対多リレーション
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'comments_posts', 'comment_id', 'post_id');
    }
}
