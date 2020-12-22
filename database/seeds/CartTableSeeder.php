<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert(array(
            array(
                'userID' => '2',
                'shoeID' => '2',
                'quantity' => '1',
            ),
            array(
                'userID' => '2',
                'shoeID' => '1',
                'quantity' => '2',
            ),
        ));
    }
}
