<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
    	foreach (range(1,50) as $index) {
        DB::table('bookings')->insert([
            'title' => $faker->word,
            'user_id' => 1,
            'stars' => $faker->numberBetween(1, 5),
            'rating' => 0,
            'price' => $faker->numberBetween(50, 500),
            'description' => $faker->paragraph,
            'cover_image' => "schimbanume.png"
        ]);
        }
    }
}
