<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $fillable = [
        'nome',
        'bloco_id',
        'regiao_id'
    ];

    public function pessoas()
    {
        return $this->hashMany(Pessoa::class);
    }
}
