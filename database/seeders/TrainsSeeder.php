<?php

namespace Database\Seeders;

use App\Models\train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainsSeeder extends Seeder
{

    public function run(Faker $faker): void


    {
        DB::table('trains')->truncate();
        $agency = ['freccia rossa', 'intercity', 'regionale', 'regionale veloce'];
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new train();
            $newTrain->agency = $faker->randomElement($agency);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeInInterval(now(), '+1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, '+1 day');
            $newTrain->train_code = $faker->bothify('??-#####');
            $newTrain->number_of_carriages = $faker->numberBetween(1, 11);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
