<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => Hash::make('admin'),
            ),
            array(
                'username' => 'niklas',
                'email' => 'niklas@gmail.com',
                'role' => 'member',
                'password' => Hash::make('niklas'),
            ),
        ));
    }
}
