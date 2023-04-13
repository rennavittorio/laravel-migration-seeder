<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 100; $i++) {

            $companies = ['trenitalia', 'italo', 'trenord'];
            $stations = ['milano', 'bologna', 'firenze', 'roma', 'napoli'];
            $departure_s = $faker->randomElement($stations);
            $arrival_s = '';
            do {
                $arrival_s = $faker->randomElement($stations);
            } while ($arrival_s === $departure_s);

            $train = new Train();

            $train->company = $faker->randomElement($companies);
            $train->departure_station = $departure_s;
            $train->arrival_station = $arrival_s;
            $train->departure_time = $faker->dateTimeBetween('-1 day', 'now');
            $train->arrival_time = $faker->dateTimeBetween('now', 'now');
            $train->train_code = $faker->bothify('#####');
            $train->carriages = $faker->randomNumber(2, false);
            $train->isOnTime = $faker->boolean();
            $train->isCancelled = $faker->boolean();

            $train->save();
        }

        // Train::factory()
        //     ->count(10)
        //     ->create();
    }
}
