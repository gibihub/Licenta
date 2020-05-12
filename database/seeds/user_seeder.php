<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "swatyraul",
            'email' => "swatyraul@yahoo.com",
            'password' => bcrypt('mielbaut1'),
        ]);
    }
}
