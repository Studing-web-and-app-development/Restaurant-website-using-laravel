<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //   Products::factory(30)->create();
        $this->call([CategoriesTableSeeder::class,]);
        $this->call([ProductsTableSeeder::class,]);
       
    }
}
