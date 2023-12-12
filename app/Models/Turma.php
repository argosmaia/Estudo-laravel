<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_turma", // chave estrangeira de turma
        "nome_disciplina", 
        "id_professor", // chave estrangeira de professor
        "id_aluno", // chave estrangeira de aluno
        "sala", // chave estrangeira de aluno
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
