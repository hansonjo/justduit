<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(array(
            array(
                'userID' => '2',
                'date' => '2020-12-18 22:38:12',
            ),
            array(
                'userID' => '2',
                'date' => '2020-12-19 12:22:36',
            ),
        ));
    }
}
