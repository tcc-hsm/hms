<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    public $fillable = [
        'email',
        'nome',
        'senha',
        'perfil'
    ];

    public $table = 'db_usuarios';
    //public $fillable = 'db_usuarios';




}
