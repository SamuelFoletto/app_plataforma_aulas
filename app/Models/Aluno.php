<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    protected $table = 'alunos';
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'email',
        'data_nascimento'
    ];

    public function matriculaAluno(){
        return $this->hasOne('App\Models\Matricula', 'id', 'aluno_id');
    }
}
