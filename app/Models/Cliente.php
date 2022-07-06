<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected  $primaryKey = 'cli_id';

    protected $fillable = [
        'cli_fantasia',	
        'cli_responsavel',
        'cli_doctipo',        
        'cli_docnumero',
    ];

}
