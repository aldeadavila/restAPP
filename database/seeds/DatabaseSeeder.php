<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        Model::unguard();

        $this->call(AdminTableSeeder::class);        
        $this->call(UserTableSeeder::class);
        $this->call(ImovelTableSeeder::class);
        $this->call(FotoTableSeeder::class);
        $this->call(CaracteristicaTableSeeder::class);
        $this->call(ImovelsCaracteristicasSeeder::class);


        Model::reguard();
    }
}
