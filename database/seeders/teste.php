<?php

namespace Database\Seeders;

use App\Models\teste as ModelsTeste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class teste extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsTeste::create([
            'id' => fake()->numberBetween(1, 100),
            'name' => fake()->sentence(2),
            'email' => fake()->numberBetween(1, 10),
            'updated_at' => date('Y-m-d'),
            'created_at' => date('Y-m-d'),
            'password' => Hash::make('password'),
            'projetos' => fake()->sentence(6),
        ]);
    }
}
