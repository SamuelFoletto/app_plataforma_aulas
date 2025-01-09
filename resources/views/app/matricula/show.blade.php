@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <div class="fs-4 fw-bolder text-center">
            <p>Visualizar Alunos Matriculados</p>
        </div>

        <div>
            <ul class="d-flex justify-content-end list-unstyled">
                <li class="me-2"><a href="{{route('matricula.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
            </ul>
        </div>
    </div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Matricula</th>
        <th>Nome do Aluno</th>
        <th>Email</th>
        <th>Data de matricula</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($matriculas as $matricula)
        <tr>
            <td>{{ $matricula->id }}</td>
            <td>{{ $matricula->aluno->nome }}</td>
            <td>{{ $matricula->aluno->email }}</td>
            <td>{{$matricula->data_matricula}}</td>
            <td><a href="{{route('matricula.edit', $matricula->id)}}"><button type="submit" class="btn btn-primary fw-bold">Editar</button></a></td>
            <td>
                <form action="{{route('matricula.destroy', ['matricula' => $matricula])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger fw-bold" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
