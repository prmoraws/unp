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
            $table->string('nome');
            $table->string('celeuar');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('profissao');
            $table->text('aptidoes');
            $table->date('conversao');     //data de conversão
            $table->date('obra');    //data início na obra
            $table->string('trabalho'); //interno ou externo
            $table->boolean('batismo')->default(0);;   //bol batizado nas águas
            $table->boolean('esanto')->default(0);;  //bol batizado no Espirito Santo
            $table->boolean('preso')->default(0);;   //bol ja foi preso
            $table->boolean('parente')->default(0);;     //bol parente preso
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
