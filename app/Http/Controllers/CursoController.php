<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        return view('app.curso.index', ['cursos' => $cursos]);
    }

    public function create()
    {
        return view('app.curso.create');
    }

    public function store(Request $request)
    {
        $regra = [
            'nome' => 'required|min:3|max:70',
            'descricao' => 'required|min:3|max:200',
            'duracao' => 'required|numeric|min:1',
        ];
        $mensagem = [
            'nome.min' => 'O campo :attribute deve ter pelo menos 3 caracteres',
            'nome.max' => 'O campo :attribute deve ter no maximo 70 caracteres',
            'descricao.min' => 'A :attribute deve ter pelo menos 3 caracteres',
            'descricao.max' => 'A :attribute deve ter no maximo 200 caracteres',
            'duracao.min' => 'A duração deve ser de no minimo 1 hora',
            'required' => 'O campo :attribute é obrigatório'
        ];

        $request->validate($regra, $mensagem);

        Curso::create($request->all());
        return redirect()->route('curso.index');
    }


    public function show(string $id)
    {
        $curso = Curso::find($id);
        return view('app.curso.show', ['curso' => $curso]);
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        Curso::find($id)->delete();
        return redirect()->route('curso.index');
    }
}
