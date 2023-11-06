<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // Categoryに対するリレーション

    //「1対多」の関係なので単数系に
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
