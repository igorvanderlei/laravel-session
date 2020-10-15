<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class FuncionarioSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Funcionario::factory()
            ->for(User::factory()->state([
                'email' => 'igor.vanderlei@gmail.com',
                'tipo' => 'funcionario'
            ]))
            ->create();
    }
}
