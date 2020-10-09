<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categoria::create(['nome' => 'Hardware']);
        \App\Models\Categoria::create(['nome' => 'Software']);

        \App\Models\Categoria::create(['nome' => 'Monitor',
                                       'categoria_id' => 1]);
        \App\Models\Categoria::create(['nome' => 'Teclado',
                                       'categoria_id' => 1]);
        \App\Models\Categoria::create(['nome' => 'Mouse',
                                       'categoria_id' => 1]);

        \App\Models\Categoria::create(['nome' => 'Anti virus',
                                       'categoria_id' => 2]);
        \App\Models\Categoria::create(['nome' => 'SO',
                                       'categoria_id' => 2]);

    }
}
