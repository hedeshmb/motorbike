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
        //reset the users table
        DB::table('users')->truncate();
        //generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Hedesh",
                'email' => "mahmoud@hedesh.ir",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Demo",
                'email' => "demo@demo.ir",
                'password' => bcrypt('demo')
            ]
        ]);
    }
}
