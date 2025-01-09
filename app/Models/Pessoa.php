<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'celeuar',
        'telefone',
        'email',
        'endereco',
        'bairro',
        'cep',
        'cidade',
        'estado',
        'profissao',
        'aptidoes',
        'conversao',
        'obra',
        'trabalho',
        'batismo',
        'esanto',
        'preso',
        'parente',
        'testemunho'

    ];

    public function pessoas()
    {
        return $this->hashMany(Pessoa::class);
    }
}
