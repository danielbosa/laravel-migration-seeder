<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class treni_trenordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure = $faker->city();
            $newTrain->destination = $faker->city();
            $newTrain->departure_date = $faker->date();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_date = $faker->date();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_id = $faker->randomNumber(5, true);
            $newTrain->carriage_count = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->confirmed = $faker->boolean();
            $newTrain->save();
        }

    }
}
