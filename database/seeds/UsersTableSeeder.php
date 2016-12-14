<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'first_name' => 'Joe',
            'last_name' => 'Sweeny',
            'username' => 'joe',
            'email' => 'joe@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
