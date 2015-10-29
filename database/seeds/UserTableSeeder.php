<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create('pt_BR');

      for($i = 0; $i<10;$i++){
         DB::table('users')->insert(array(
            'name' => $faker->name,
            'telefone' => $faker->cellphone,
            'email' => $faker->unique()->email,
            'password' => \Hash::make('123456'),
            'role' => 'user',
         ));
      }
    }
}
