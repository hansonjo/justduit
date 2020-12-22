<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(ShoeTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(TransactionDetailTableSeeder::class);
        $this->call(CartTableSeeder::class);
    }
}
