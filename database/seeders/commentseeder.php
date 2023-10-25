<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use DateTime;

class commentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーと投稿の実際のIDを指定する
        $user_id = 1; $user_id2 = 2; $user_id3 = 3;// 本当のユーザーIDを指定
        $post_id = 1; $post_id2 = 2; $post_id3 = 3; // 本当の投稿IDを指定
        
       DB::table('comments')->insert([
                 'user_id' => $user_id,
                 'post_id' => $post_id,
                 'comment' => 'ここのラーメン美味しいですよね。',
                 'rating' => 3, // レーティングは整数値
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
       ]);

       DB::table('comments')->insert([
                 'user_id' => $user_id2,
                 'post_id' => $post_id2, // 同じ投稿に関連付け
                 'comment' => 'ここのラーメンよく行きます。',
                 'rating' => 4,
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
       ]);

       DB::table('comments')->insert([
                 'user_id' => $user_id3,
                 'post_id' => $post_id3, // 同じ投稿に関連付け
                 'comment' => '美味しい',
                 'rating' => 5,
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
       ]);

        
    }
}
