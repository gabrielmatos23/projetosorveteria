<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('produtos')->insertOrIgnore([
            'nome' => 'Sorvete de Chocolate',
            'tipo' => 'Sorvete',
            'quantidade_estoque' => 10,
            'preco' => 350.00

        ]);
    }
}
