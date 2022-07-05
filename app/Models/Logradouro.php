<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logradouro extends Model
{
    use HasFactory;

    protected $fillable = [
        'log_cep',	
        'log_nome',
        'log_tipo',        
        'log_bairro'
    ];
}

