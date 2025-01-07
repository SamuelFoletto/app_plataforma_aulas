<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
    protected $fillable = [
        'id',
        'curso_id',
        'aluno_id',
        'data_matricula'
    ];


    public function aluno()
    {
        return $this->belongsTo('App\Models\Aluno',"aluno_id","id");
    }

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso',"curso_id","id");

    }

    public static function contarPorCurso()
    {
        return self::selectRaw('curso_id, COUNT(*) as total')
            ->groupBy('curso_id')
            ->get();
    }



}
