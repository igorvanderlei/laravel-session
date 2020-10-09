<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Produto::create([
        "nome" => "Monitor 17",
        "preco" => 500.50,
        "categoria_id" => 3]);

        \App\Models\Produto::create([
        "nome" => "Monitor 19",
        "preco" => 700.00,
        "categoria_id" => 3]);

        \App\Models\Produto::create([
        "nome" => "Monitor 21",
        "preco" => 800,
        "categoria_id" => 3]);

        \App\Models\Produto::create([
        "nome" => "Mouse Logitech",
        "preco" => 50.20,
        "categoria_id" => 5]);

        \App\Models\Produto::create([
        "nome" => "Teclado ABNT",
        "preco" => 37.40,
        "categoria_id" => 4]);


    }
}
