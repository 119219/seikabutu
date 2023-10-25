<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                 'name' => 'ユーザー1',
                 'age' => '19',
                 'email' => Str::random(10) . '@example.com', // ランダムなメールアドレスを生成
                 'password' => Hash::make('Password'),
                 'image_url' => 'イメージ画像挿入',
                 'remember_token' => 'ログイン時にログイン状態を保持',
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
                 'name' => 'ユーザー2',
                 'age' => '20',
                 'email' => Str::random(10) . '@example.com', // ランダムなメールアドレスを生成
                 'password' => Hash::make('Password'),
                 'image_url' => 'イメージ画像挿入',
                 'remember_token' => 'ログイン時にログイン状態を保持',
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
                 'name' => 'ユーザー3',
                 'age' => '21',
                 'email' => Str::random(10) . '@example.com', // ランダムなメールアドレスを生成
                 'password' => Hash::make('Password'),
                 'image_url' => 'イメージ画像挿入',
                 'remember_token' => 'ログイン時にログイン状態を保持',
                 'created_at' => new DateTime(),
                 'updated_at' => new DateTime(),
        ]);
    }
}
