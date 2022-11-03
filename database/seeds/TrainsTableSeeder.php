<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            // $newTrain->id = $faker->unique()->numberBetween(1, 20);
            $newTrain->departure_station = $faker->sentence(3);
            $newTrain->arrival_station = $faker->sentence(3);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->unique()->randomNumber(5, true);
            $newTrain->cabs_number = $faker->numberBetween(4, 12);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
