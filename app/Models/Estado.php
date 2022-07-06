<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected  $key = 'est_id';

    protected $fillable = [
        'est_nome',	
    ];
}
