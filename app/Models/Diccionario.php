<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diccionario extends Model
{
    use HasFactory;
    protected $table = 't_diccionario';
    protected $primaryKey ='id_diccionario';

    protected $fillable = [
        'palabra_nahuatl','palabra_espanol'
    ];
}
