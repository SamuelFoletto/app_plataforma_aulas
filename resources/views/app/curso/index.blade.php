@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')

    <div>
        <div class="fs-4 fw-bolder text-center">
            <p>Visualizar Cursos</p>
        </div>

        <div>
            <ul class="d-flex justify-content-end list-unstyled">
                <li class="me-2"><a href="{{route('curso.create')}}"><button type="button" class="btn btn-primary btn-sm">Cadastrar</button></a></li>
                <li class="me-2"><a href="{{route('principal')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
            </ul>
        </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Cód. Curso</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Duração</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nome}}</td>
                    <td>{{$curso->descricao}}</td>
                    <td>{{$curso->duracao.' H'}}</td>
                    <td><a href="{{route('curso.show', $curso->id)}}"><button class="btn btn-warning fw-bold">Editar</button></a></td>
                    <td>
                        <form action="{{route('curso.destroy', ['curso' => $curso->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger fw-bold" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>


@endsection
