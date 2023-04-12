<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $rndNum = new Number;

        return [
            'company' => Str::random(10),
            'departure_station' => Str::random(10),
            'arrival_station' => Str::random(10),
            'departure_time' => '2023-04-12 00:00:30',
            'arrival_time' => '2023-04-12 01:02:03',
            'train_code' => $rndNum->numberBetween(0, 255),
            'carriages' => $rndNum->numberBetween(5, 10),
            'isOnTime' => $rndNum->numberBetween(0, 1),
            'isCancelled' => $rndNum->numberBetween(0, 1),
        ];
    }
}
