<?php

namespace Database\Seeders;

use App\Models\train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new train();
            $newTrain->agency = $faker->name();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTime();
            $newTrain->arrival_time = $faker->dateTime();
            $newTrain->train_code = $faker->bothify('??-#####');
            $newTrain->number_of_carriages = $faker->numberBetween(5, 11);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
