@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')

    <div>
        <div class="fs-4 fw-bolder text-center">
            <p>Visualizar Alunos</p>
        </div>

        <div>
            <ul class="d-flex justify-content-end list-unstyled">
                <li class="me-2"><a href="{{route('aluno.create')}}"><button type="button" class="btn btn-primary btn-sm">Cadastrar</button></a></li>
                <li class="me-2"><a href="{{route('principal')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
            </ul>
        </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->id}}</td>
                <td> {{$aluno->nome}}</td>
                <td>{{$aluno->email}}</td>
                <td><a href="{{route('aluno.show', $aluno->id)}}"><button class="btn btn-warning fw-bold">Editar</button></a></td>
                <td>
                    <form action="{{route('aluno.destroy', ['aluno' => $aluno->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger fw-bold" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>


@endsection
