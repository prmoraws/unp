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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Bloco::class);
            $table->foreignIdFor(\App\Models\Regiao::class);
            $table->foreignIdFor(\App\Models\Igreja::class);
            $table->foreignIdFor(\App\Models\Categoria::class);
            $table->foreignIdFor(\App\Models\Cargo::class);
            $table->foreignIdFor(\App\Models\Grupo::class);
            $table->foreignIdFor(\App\Models\Cidade::class);
            $table->foreignIdFor(\App\Models\Estado::class);
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('nome');
            $table->string('celular');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('profissao');
            $table->text('aptidoes');
            $table->date('conversao');     //data de conversão
            $table->date('obra');    //data início na obra
            $table->json('trabalho');
            $table->json('batismo'); //
            $table->json('preso');
            $table->text('testemunho');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
