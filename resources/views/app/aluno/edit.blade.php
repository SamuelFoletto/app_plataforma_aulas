@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('aluno.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>

    <div class="w-100 mt-3">
        <form action="{{route('aluno.update', ['aluno'=>$aluno->id])}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control w-100" name="nome" value="{{$aluno->nome}}">
                {{$errors->first('nome') ?? ''}}

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input type="email" class="form-control w-100" name="email" value="{{$aluno->email}}">
                {{$errors->first('email') ?? ''}}
            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">CPF</label>
                <input type="text" class="form-control w-100" name="cpf" value="{{$aluno->cpf}}">
                {{$errors->first('cpf') ?? ''}}
            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control w-100" name="data_nascimento" value="{{$aluno->data_nascimento}}">
                {{$errors->first('data_nascimento') ?? ''}}
            </div>
            <div class="d-flex flex-column align-middle mx-auto" style="width: 500px;">
                <button type="submit" class="btn btn-primary w-25 mx-auto">Editar</button>
            </div>
        </form>

    </div>

@endsection
