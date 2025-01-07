@extends('site.layout.basico')
@section('titulo', 'BC - Matriculas')


@section('conteudo')

    <div>
        <div class="fs-4 fw-bolder text-center">
            <p>Visualizar Matriculas</p>
        </div>

        <div>
            <ul class="d-flex justify-content-end list-unstyled">
                <li class="me-2"><a href="{{route('matricula.create', ['$dados_cursos' => $dados_cursos])}}"><button type="button" class="btn btn-primary btn-sm">Matricular Aluno</button></a></li>
                <li class="me-2"><a href="{{route('principal')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
            </ul>
        </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Cód. Curso</th>
                <th>Nome do Curso</th>
                <th>Quantidade de Matriculas</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($dados_cursos as $dados_curso)
                    <tr>
                        <td>{{$dados_curso->id}}</td>
                        <td>{{$dados_curso->nome}}</td>
                        <td>{{$quantidadeMatriculasPorCurso->firstWhere('curso_id', $dados_curso->id)->total ?? 0 }}</td>
                        <td><a href="{{route('matricula.show', $dados_curso->id)}}"><button class="btn btn-warning fw-bold">Visualizar</button></a></td>
                    </tr>
                @endforeach
            </tbody>


@endsection
