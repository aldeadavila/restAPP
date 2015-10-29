<?php

use Illuminate\Database\Seeder;
use App\Imovel;
use App\Caracteristica;
use Faker\Factory as Faker;

class ImovelsCaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

        $imovelIds = Imovel::lists('id')->toArray();
        $caracteristicaIds = Caracteristica::lists('id')->toArray();

        foreach(range(1, 100) as $index)
        {
            DB::table('imovels_caracteristicas')->insert([
               'imovel_id' => $faker->randomElement($imovelIds),
               'caracteristica_id' => $faker->randomElement($caracteristicaIds),
               'numero' => $faker->randomElement($array = array ('2','3','1','0')),
            ]);
        }
    }
}
