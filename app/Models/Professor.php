<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "id_professor", // chave estrangeira de professor
        "id_turma", // chave estrangeira de turma
        "disciplina", // chave estrangeira de turma
        "sala", // chave estrangeira de turma
    ];

    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
