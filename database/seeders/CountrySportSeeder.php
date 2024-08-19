<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CountrySportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $sportList = Sport::all();
        $countryList = Country::all()->pluck('id');

        foreach ($sportList as $sport) {
            $sport->countries()->sync($faker->randomElements($countryList, rand(80, 120)));
        }
    }
}
