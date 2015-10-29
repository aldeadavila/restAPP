<?php
use Illuminate\Database\Seeder;
use App\Imovel;
use Faker\Factory as Faker;

class ImovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('imovels')->truncate();

        $faker = Faker::create('pt_BR');

        foreach (range(1,30) as $i) {
           DB::table('imovels')->insert(array(
                'tipo_de_imovel' => $faker->randomElement($array = array ('Apartamento', 'Casa em Condominio', 'Casa Bairro', 'Sitio', 'Chacara', 'Terreno Residencial', 'Terreno Industrial', 'Terreno Comercial', 'Gapão', 'Casa Litoral', 'Chacara Litoral', 'Sobrado Bairro', 'Ponto Comercial', 'Salão Comercial', 'Belo Sitio', 'Predio Comercial', 'Imóvel Comercial')),
                'negocio' => $faker->randomElement($array = array ('Venda', 'Aluguel', 'Venda e Locação')),
                'bairro' => $faker->sentence($nbWords = 2),
                'cidade' => $faker->randomElement($array = array ('Embu das Artes', 'Tabão da Serra')),
                'valor' => $faker->numberBetween($min = 30000, $max = 500000),
                'area' => $faker->numberBetween($min = 30, $max = 5000),
                'status' =>$faker->randomElement($array = array ('1','0')),
                'descricao' => $faker->paragraph($nbSentences = 8),
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
            ));
        }
        
    }
}