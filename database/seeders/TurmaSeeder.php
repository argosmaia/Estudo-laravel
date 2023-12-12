<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Turma;
class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $turma = Turma::all();

        foreach($turma as $turma){
            [
                "id_turma" => $turma->id_turma,
                "nome_disciplina" => $turma->nome,
                "sala" => $turma->sala,
            ];
        }
    }
}
