<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'user12345@gmail.com',
                'name' => '大蛇丸',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user6789@gmail.com',
                'name' => 'ゲキ落ちくん',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'narrow617@gmail.com',
                'name' => 'ロックマンエグゼ',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => '097688@gmail.com',
                'name' => 'ぐへへへ',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'ewt4wyteui23456@gmail.com',
                'name' => 'ぐへへへ',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'eheokhnoketnh@gmail.com',
                'name' => 'ぐへへへ',
                'password' => bcrypt('test12345'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
