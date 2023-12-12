<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professores = Professor::all();

        foreach ($professores as $professor) {
            [
                "id_professor" => $professor->id_professor, // chave estrangeira de professor
                "nome" => $professor->nome,
                "id_turma" => $professor->id_turma, // chave estrangeira de turma
                "disciplina" => $professor->disciplina, // chave estrangeira de turma
                "sala" => $professor->sala, // chave estrangeira de turma
            ];
        }
    }
}
