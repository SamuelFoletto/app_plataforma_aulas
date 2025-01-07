<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all();
        return view('app.aluno.index', ['alunos' => $alunos]);
    }


    public function create()
    {
        return view('app.aluno.create');

    }


    public function store(Request $request)
    {
        $regra = [
            'nome' => 'required|min:3|max:70',
            'email' => 'required|email|unique:alunos',
            'cpf' => 'required|cpf|unique:alunos',
            'data_nascimento' => 'required|date',
        ];
        $mensagem = [
            'nome.min' => 'O campo :attribute deve ter pelo menos 3 caracteres',
            'nome.max' => 'O campo :attribute deve ter no maximo 70 caracteres',
            'email.email' => 'O campo :attribute deve ser preenchido com um e-mail correto',
            'cpf.cpf' => 'Informe um CPF válido',
            'required' => 'O campo :attribute é obrigatório'
        ];

        $request->validate($regra, $mensagem);

        Aluno::create($request->all());

        return redirect()->route('aluno.index');

    }


    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('app.aluno.show', ['aluno' => $aluno]);
    }

    public function edit(Aluno $aluno)
    {
        return view('app.aluno.edit', ['aluno' => $aluno]);

    }

    public function update(Request $request, Aluno $aluno)
    {
        $aluno->update($request->all());
        return redirect()->route('aluno.index');
    }

    public function destroy($id)
    {
        Aluno::find($id)->delete();
        return redirect()->route('aluno.index');
    }
}
