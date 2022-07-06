<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected  $primaryKey = 'est_id';
    protected $keyType = 'string';
    //protected $incrementing  = false;

    public $timestamps = false;

    // protected $fillable = [
    //     'est_nome'
    // ];
}
