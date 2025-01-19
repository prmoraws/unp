<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $fillable = [
        'nome',
        'bloco_id'
    ];

    public function pessoas()
    {
        return $this->hashMany(Pessoa::class);
    }

    public function igrejas()
    {
        return $this->hashMany(Igreja::class);
    }

    public function blocos()
    {
        return $this->belongsTo(Bloco::class);
    }
}
