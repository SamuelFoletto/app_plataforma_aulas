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

    public function matriculas(){
        return $this->hasMany('App\Models\Matricula', 'curso_id', 'id');
    }

    public function contaMatriculas(){
        return $this->matriculas()->count();
    }
}
