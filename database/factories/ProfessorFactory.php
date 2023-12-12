<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' =>fake()->name(),
            'matricula' =>fake()->Str::mt_random(10000000, 99999999),
            'id_turma' =>fake()->mt_random(1, 1000),
            'sala' =>fake()->Str::mt_random(1, 99),
        ];
    }
}
