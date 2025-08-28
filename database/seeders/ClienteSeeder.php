<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insertOrIgnore([
            'nome' => 'Gabriel',
            'CPF' => '08526904701',
            'email' => 'Gabrielbelo1@gmail.com'
        ]);
    }
}
