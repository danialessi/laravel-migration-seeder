<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $new_travel = new Travel();

            $new_travel->name = $faker->word(2, true);
            $new_travel->destination = $faker->country();
            $new_travel->description = $faker->paragraph();
            $new_travel->price = $faker->randomNumber(4);
            $new_travel->image = $faker->imageUrl(360, 360, 'city', true);
            $new_travel->save();
        }
    }
}
