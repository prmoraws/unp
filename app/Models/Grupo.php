<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function pessoas()
    {
        return $this->hashMany(Pessoa::class);
    }
}
