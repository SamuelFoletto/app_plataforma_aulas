<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{

    public function index()
    {
        $dados_cursos = Curso::with('matriculas')->get();
        $quantidadeMatriculasPorCurso = Matricula::contarPorCurso();


        return view('app.matricula.index', ['dados_cursos' => $dados_cursos, 'quantidadeMatriculasPorCurso' => $quantidadeMatriculasPorCurso]);
    }




    public function create()
    {
        $alunos = Aluno::all();
        $cursos = Curso::all();
        return view('app.matricula.create', ['alunos' => $alunos, 'cursos' => $cursos]);
    }


    public function store(Request $request)
    {

        $regra = [
            'curso_id' => 'required|exists:cursos,id',
            'aluno_id' => 'required|exists:alunos,id'
        ];
         $mensagem = [
            'required' => 'O campo :attribute é obrigatório',
            'curso_id.exists' => 'Campo não existe',
            'aluno_id.exists' => 'Campo não existe'
        ];

        $request->validate($regra, $mensagem);

        Matricula::create($request->all());
        return redirect()->route('matricula.index');


    }


    public function show(string $id)
    {
        $matriculas = Matricula::where('curso_id', $id)->with('aluno')->get();

        return view('app.matricula.show', ['matriculas' => $matriculas]);
    }





    public function edit($id)
    {
        $matricula = Matricula::find($id);
        $cursos = Curso::all();
        return view('app.matricula.edit', ['matricula' => $matricula, 'cursos' => $cursos]);
    }

    public function update(Request $request, Matricula $matricula)
    {
        $matricula->update($request->all());
        return redirect()->route('matricula.index');
    }


    public function destroy(string $id)
    {
        Matricula::find($id)->delete();
        return redirect()->route('matricula.index');
    }


}
