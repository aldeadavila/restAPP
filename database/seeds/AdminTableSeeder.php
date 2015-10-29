<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array(
         'name' => 'vagner',
         'telefone' => '4149-7102',
         'email' => 'vagner@imobiliariajlima.com',
         'password' => \Hash::make('deltoya1314'),
         'role' => 'admin',
      ));
    }
}
