<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alunos = Aluno::all();
        foreach ($alunos as $aluno) {
            [
                [
                    "id_aluno" => $aluno->id_aluno, // chave estrangeira de aluno
                    "nome" => $aluno->nome,
                    "matricula" => $aluno->matricula,
                    "id_turma" => $aluno->id_turma, // chave estrangeira de turma
                    "sala" => $aluno->sala, // chave estrangeira de turma
                ],
            ];
        }
    }
}
