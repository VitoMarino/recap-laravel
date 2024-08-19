<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 50; $i++) {
            $newSport = new Sport();
            $newSport->name = $faker->word();
            $newSport->sport_of_group = $faker->boolean();
            $newSport->number_of_partecipants = $faker->unique()->numberBetween(1, 1000);
            $newSport->save();
        }
    }
}
