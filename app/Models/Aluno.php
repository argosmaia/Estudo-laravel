<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = "aluno";

    protected $fillable = [
        "id_aluno", // chave estrangeira de aluno
        "nome",
        "matricula",
        "id_turma", // chave estrangeira de turma
        "sala", // chave estrangeira de turma
    ];

    public function turmas()
    {
        return $this->belongsToMany(Turma::class);
    }
}
