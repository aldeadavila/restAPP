<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('pt_BR');
      
      for($i = 0; $i<300;$i++){
         DB::table('fotos')->insert(array(
            'ruta' => $faker->imageUrl($width = 640, $height = 480),
            'nome' => $faker->sentence($nbWords = 3),
            'descricao' => $faker->paragraph($nbSentences = 1),
            'imovel_id' => $faker->numberBetween($min = 1, $max = 30),
         ));
      }
    }
}
