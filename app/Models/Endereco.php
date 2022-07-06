<?php

namespace App\Models;

use Facade\FlareClient\Http\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected  $key = 'end_id';

    protected $fillable = [
        'end_complemento',	
        'end_numero',
        'cli_id',
        'log_id',
    ];

    // public function cliente() {
    //     return $this->hasOne(Cliente::class, 'cli_id');
    // }

    // public function logradouro() {
    //     return $this->hasOne(Endereco::class, 'log_id');
    // }
}
