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
                'email' => 'test12345@gmail.com',
                'name' => '大蛇丸',
                'real_name' => '田中タロう',
                'password' => bcrypt('test12345'),
                'item_count' => 100,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user6789@gmail.com',
                'name' => 'ゲキ落ちくん',
                'real_name' => '山田ゆうき',
                'password' => bcrypt('test12345'),
                'item_count' => 50,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'narrow617@gmail.com',
                'name' => 'ロックマンエグゼ',
                'real_name' => 'つじさとり',
                'password' => bcrypt('test12345'),
                'item_count' => 1,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => '097688@gmail.com',
                'name' => 'ぐへへへ',
                'real_name' => 'かとうゆうき',
                'password' => bcrypt('test12345'),
                'item_count' => 40,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'ewt4wyteui23456@gmail.com',
                'name' => 'ぐへへへ',
                'real_name' => 'じょんまじろう',
                'password' => bcrypt('test12345'),
                'item_count' => 20,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'eheokhnoketnh@gmail.com',
                'name' => 'ぐへへへ',
                'real_name' => 'コロナ太郎',
                'password' => bcrypt('test12345'),
                'item_count' => 80,
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
