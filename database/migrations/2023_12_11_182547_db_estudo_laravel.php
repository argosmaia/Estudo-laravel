<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('turma')) {
            Schema::create('turma', function (Blueprint $table) {
                $table->id('id_turma')->unique();
                $table->string("nome_disciplina");
                $table->string("id_professor");
                $table->integer("sala");
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('professor')) {
            Schema::create('professor', function (Blueprint $table) {
                $table->string("nome");
                $table->string("id_professor")->unique();
                $table->foreignId("id_turma")
                    ->constraint()
                    ->references("id_turma")
                    ->on("turma");
                $table->string("disciplina");
                $table->integer("sala")
                    ->constraint()
                    ->references('sala')
                    ->on('turma');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable("aluno")) {
            Schema::create('aluno', function (Blueprint $table) {
                $table->id('id_aluno')->unique();
                $table->string("nome");
                $table->string("matricula")->unique();
                $table->foreignId("id_turma")
                    ->constraint()
                    ->references("id_turma")
                    ->on("turma");
                $table->integer("sala")
                    ->constraint()
                    ->references('sala')
                    ->on('turma');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno');
        Schema::dropIfExists('professor');
        Schema::dropIfExists('turma');
    }
};
