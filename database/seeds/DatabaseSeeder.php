<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(SaleStatusesTableSeeder::class);
        $this->call(A8CategorysParentTableSeeder::class);
        $this->call(A8CategorysChildrenTableSeeder::class);
        $this->call(A8CategoriesTableSeeder::class);
    }
}
