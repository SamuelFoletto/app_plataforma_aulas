<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use softDeletes;
    protected $table = 'cursos';
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'duracao'
    ];
    //
}