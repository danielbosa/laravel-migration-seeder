<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

use App\Functions\Helpers as Help;

class treni_trenordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /*!USANDO FAKER
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
    */

    /*!USANDO CSV*/
    public function run()
    {
        $path = __DIR__ . '/trains.csv';
        $data = Help::getCsvData($path);
        // dd($data);
        foreach($data as $index=>$train){
            if($index !== 0){
                $newTrain = new Train();
                $newTrain->company = $train[0];
                $newTrain->company = $train[1];
                $newTrain->departure = $train[2];
                $newTrain->destination = $train[3];
                $newTrain->departure_date = $train[4];
                $newTrain->departure_time = $train[5];
                $newTrain->arrival_date = $train[6];
                $newTrain->arrival_time = $train[7];
                $newTrain->train_id = $train[8];
                $newTrain->carriage_count = $train[9];
                $newTrain->on_time = $train[10];
                $newTrain->confirmed = $train[11];
                $newTrain->save();
            }
        }
    }

}
