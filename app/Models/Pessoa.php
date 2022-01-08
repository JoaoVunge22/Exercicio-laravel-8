<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'estado',
        'imagem'
    ];

    //Relacionamento
    public function contatos (){
        return $this->hasMany(Contato::class);
    }
}
