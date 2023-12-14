<?php

namespace Database\Seeders;

use App\Models\Train;
//use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

 

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 2000; $i++) {
            $new_train = new Train();

            /* $new_train->azienda = $faker->randomElement(['trenitalia', 'italo', 'trenord', 'tper', 'ATAC', 'Trentino Trasporti', 'Mediterranean Railways', 'DB Schenker Rail']); */
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->orario_di_arrivo = $faker->dateTimeBetween('-6 days', '+8 days');
            $new_train->codice_treno = $faker->numerify('#####');
            $new_train->numero_di_carrozze = $faker->numberBetween(7, 20); 
            $new_train->in_orario = $faker->randomElement([false, true]);
            $new_train->cancellato = $faker->randomElement([false, true]);

            $new_train->save();
            

        }
    }
}
