<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
        $newTrain= new Train();
        $newTrain->Azienda=$faker->company();
        $newTrain->Stazione_di_partenza= $faker->city();
        $newTrain->Stazione_di_arrivo= $faker->city();
        $newTrain->Orario_di_partenza= $faker->dateTimeBetween('-1 day', '+1 day');
        $newTrain->Orario_di_arrivo= $faker->dateTime();
        $newTrain->codice_treno= $faker->ean8();
        $newTrain->carrozze= $faker->randomDigit();
        $newTrain->in_orario= $faker->boolean();
        $newTrain->cancellato= $faker->boolean();
        $newTrain->save();

        }
}
}