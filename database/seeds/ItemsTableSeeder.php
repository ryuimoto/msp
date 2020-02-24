<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
               'product_name' => 'りんご',
               'purchase_price' => 1000,
               'user_id' => 1,
               'expected_sale_price' => 100000,
               'point' => 30,
               'sale_status' => false,
               'memo' => null,
            ],
            [
                'product_name' => 'バナナ',
                'user_id' => 1,
                'purchase_price' => 1000,
                'expected_sale_price' => 100000,
                'point' => 30,
                'sale_status' => true,
                'memo' => "ぶfrgじぇろgんれおげろgねrg",
             ],
            [
                'product_name' => 'イチゴ',
                'user_id' => 1,
                'purchase_price' => 1000,
                'expected_sale_price' => 100000,
                'point' => 30,
                'sale_status' => true,
                'memo' => "ぶfrgじぇろgんれおげろgねrg",
            ],
            [
                'product_name' => 'ライチ',
                'user_id' => 1,
                'purchase_price' => 1000,
                'expected_sale_price' => 100000,
                'point' => 30,
                'sale_status' => false,
                'memo' => "ぶfrgじぇろgんれおげろgねrg",
            ],
            [
                'product_name' => 'あさがお',
                'user_id' => 1,
                'purchase_price' => 1000,
                'expected_sale_price' => 100000,
                'point' => 30,
                'sale_status' => true,
                'memo' => "ぶfrgじぇろgんれおげろgねrg",
            ],
           
          
        ]);
    }
}
