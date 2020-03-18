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
                'name' => 'テスト12345',
                'real_name' => 'テスト12345',
                'password' => bcrypt('test12345'),
                'item_count' => 100,
                'tel' => 1235678765,
                'memo' => "rgejrtjrtjrjtj",
                'last_operation_date' => date('Y-m-d H:i:s'),
                'last_login_date' => date('Y-m-d H:i:s'),
                'a8_acount_id' => 'narrow617',
                'a8_acount_pass' => 'test12345',
                'rakuten_acount_id' => 'test12345',
                'rakuten_acount_pass' => 'test134455',
                'restriction_flag' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
