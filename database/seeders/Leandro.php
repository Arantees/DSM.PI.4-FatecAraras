<?php

namespace Database\Seeders;

use App\Models\Leandro as ModelsLeandro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Leandro extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsLeandro::create([
            'id' => fake()->numberBetween(1, 100),
            'pacotes' => fake()->sentence(2),
            'bebidas' => fake()->sentence(2, 10),
            'teste' => fake()->sentence(2, 10),
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
            'nomes' => Hash::make('password'),
        ]);
    }
}
