<?php

use Illuminate\Database\Seeder;

class TransactionDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactiondetails')->insert(array(
            array(
                'transactionID' => '1',
                'shoeID' => '2',
                'quantity' => '1',
            ),
            array(
                'transactionID' => '1',
                'shoeID' => '3',
                'quantity' => '1',
            ),
            array(
                'transactionID' => '1',
                'shoeID' => '4',
                'quantity' => '2',
            ),
            array(
                'transactionID' => '2',
                'shoeID' => '5',
                'quantity' => '3',
            ),
        ));
    }
}
