<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'bloco_id',
        'regiao_id',
        'igreja_id',
        'categoria_id',
        'cargo_id',
        'grupo_id',
        'cidade_id',
        'estado_id',
        'foto',
        'nome',
        'celular',
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
        'preso',
        'testemunho'

    ];

    public function blocos()
    {
        return $this->belongsTo(Bloco::class);
    }
    public function regiaos()
    {
        return $this->belongsTo(Regiao::class);
    }

    public function igrejas()
    {
        return $this->belongsTo(Igreja::class);
    }
}
