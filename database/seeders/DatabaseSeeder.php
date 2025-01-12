<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() void
    {
        $this->call(UserTsbleSeeder::class);
            //ユーザーデータを増やして見られるようにする
            //ユーザーテーブルシーダーのファイルをコマンドで作成
            //作成したらシーダーの中身を編集
            //データベースシーダーに記述を追加
            //シーダー追加のコマンドを実施
            
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
