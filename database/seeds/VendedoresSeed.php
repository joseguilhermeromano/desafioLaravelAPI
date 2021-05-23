<?php

use Illuminate\Database\Seeder;

class VendedoresSeed extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(){
        App\Vendedor::create([
            'nome' => 'José Romano',
            'cpf' => 46119318038
        ]);
    }
}