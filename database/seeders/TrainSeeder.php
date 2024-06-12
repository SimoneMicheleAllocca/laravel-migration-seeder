<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
      
     public function run()
     {
         $faker = Faker::create('it_IT');
         
         for ($i = 0; $i < 50; $i++) {
            DB::table('trains')->insert([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeBetween('now', '+1 week'),
                'orario_arrivo' => $faker->dateTimeBetween('+1 week', '+2 weeks'),
                'codice_treno' => $faker->bothify('??-####'),
                'numero_carrozze' => $faker->numberBetween(5, 20),
                'in_orario' => $faker->boolean(80), 
                'in_ritardo' => $faker->boolean(5), 
             ]);
         }
     }
 }

