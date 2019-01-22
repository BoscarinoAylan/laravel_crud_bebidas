<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    public $fillable = [
        'nome', 'valor', 'descricao', 'alcoolica'
    ];
}
