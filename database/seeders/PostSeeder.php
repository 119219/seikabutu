<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use DateTime;


// DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
// use Illuminate\Support\Facades\DB;　を追記
// use DateTime;　を追記

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
                'user_id' => 1,
                'ramen_shop' => '一鉄',
                'prefecture' => '千葉県',
                'city' => '千葉市',
                'after_address' => '中央区',
                'zip_code' => '111-1111',
                'homepage' => 'その店のホームぺージ',
                'rating' => 3,
                'image_url' => 'イメージ画像',
                'review' => '投稿したラーメン店に対してのコメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
                'user_id' => 2,
                'ramen_shop' => '二鉄',
                'prefecture' => '千葉県',
                'city' => '千葉市',
                'after_address' => '中央区',
                'zip_code' => '222-2222',
                'homepage' => 'その店のホームぺージ',
                'rating' => 4,
                'image_url' => 'イメージ画像',
                'review' => '投稿したラーメン店に対してのコメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
                'user_id' => 3,
                'ramen_shop' => '三鉄',
                'prefecture' => '千葉県',
                'city' => '千葉市',
                'after_address' => '中央区',
                'zip_code' => '333-3333',
                'homepage' => 'その店のホームぺージ',
                'rating' => 5,
                'image_url' => 'イメージ画像',
                'review' => '投稿したラーメン店に対してのコメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
