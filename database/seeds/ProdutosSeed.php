<?php

use Illuminate\Database\Seeder;

class ProdutosSeed extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(){
        App\Produto::create([
            'nome' => 'Celular Samsung Galaxy s21',
            'vendedor_id' => 1,
            'preco' => 3000.00
        ]);
    }
}