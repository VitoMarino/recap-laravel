<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 500 ; $i++) {
            $newCountry = new Country();
            $newCountry->name = $faker->unique()->country();
            $newCountry->number_of_atletics = $faker->unique()->numberBetween(1, 1000);
            $newCountry->flag_img = $faker->imageUrl();
            $newCountry->save();
        }
    }
}
