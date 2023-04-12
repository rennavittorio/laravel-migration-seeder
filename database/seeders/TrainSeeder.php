<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rndNum = new Number;

        DB::table('trains')->insert([
            'company' => Str::random(10),
            'departure_station' => Str::random(10),
            'arrival_station' => Str::random(10),
            'departure_time' => '00:00:30',
            'arrival_time' => '01:02:03',
            'train_code' => $rndNum->numberBetween(0, 255),
            'carriages' => $rndNum->numberBetween(5, 10),
            'isOnTime' => $rndNum->numberBetween(0, 1),
            'isCancelled' => $rndNum->numberBetween(0, 1),
        ]);
    }
}
