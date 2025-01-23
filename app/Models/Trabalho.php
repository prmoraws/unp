<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabalho extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function pessoas()
    {
        return $this->hashMany(Pessoa::class);
    }
}
