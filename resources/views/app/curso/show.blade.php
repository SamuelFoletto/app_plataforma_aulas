@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('curso.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>
    <div class="w-100 mt-3">
        <form action="" method="post" class="mx-auto d-flex flex-column align-baseline" style="width: 900px;">
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control w-100" name="nome" value="{{$curso->nome}}" disabled>
                {{$errors->first('nome') ?? ''}}

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Descrição</label>
                <input type="text" class="form-control w-100" name="descricao" value="{{$curso->descricao}}" disabled>

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Duração</label>
                <input type="number" class="form-control w-100" name="duracao" value="{{$curso->duracao}}" disabled>
            </div>

        </form>
    </div>

@endsection
