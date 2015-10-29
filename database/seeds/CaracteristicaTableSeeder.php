<?php

use Illuminate\Database\Seeder;

class CaracteristicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$caracteristicas = [
    		['name' => 'dormitórios'],
    		['name' => 'cozinha'],
    		['name' => 'sala'],
    		['name' => 'churrasqueira'],
    		['name' => 'área de serviço'],
    		['name' => 'garagem'],
    		['name' => 'lavanderia']
    	];
    	
       DB::table('caracteristicas')->insert($caracteristicas);
        
    }
}
