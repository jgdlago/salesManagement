<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{

    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'João Gabriel',
                'email' => 'joao@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '234235235',
                'bairro' => 'jardim x',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Teste Padovam',
                'email' => 'v@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '5454543',
                'bairro' => 'jardim x',
            ]
        );
    }
}
