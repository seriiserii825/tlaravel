<?php

use Illuminate\Database\Seeder;

class AddUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'serii',
            'email' => 'seriiburduja@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
