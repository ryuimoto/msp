<?php

use Illuminate\Database\Seeder;

class SaleStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sale_statuses')->insert([
            [
                'name' => '売却前',
            ],
            [
                'name' => '売却済',
            ],
        ]);
    }
}
