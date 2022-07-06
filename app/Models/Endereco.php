<?php

namespace App\Models;

use Facade\FlareClient\Http\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected  $primaryKey = 'end_id';

    protected $fillable = [
        'end_complemento',	
        'end_numero',
        'cli_id',
        'log_id',
    ];
}
