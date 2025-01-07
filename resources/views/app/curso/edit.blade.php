@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('curso.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>

    <div class="w-100 mt-3">
        <form action="{{route('curso.update', ['curso' => $curso->id])}}" method="post" class="mx-auto d-flex flex-column align-baseline" style="width: 900px;">
            @csrf
            @method('PUT')
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control w-100" name="nome" value="{{$curso->nome}}">
                {{$errors->first('nome') ?? ''}}

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Descrição</label>
                <input type="text" class="form-control w-100" name="descricao" value="{{$curso->descricao}}">
                {{$errors->first('descricao') ?? ''}}
            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Duração (Em horas)</label>
                <input type="number" class="form-control w-100" name="duracao" value="{{$curso->duracao}}">
                {{$errors->first('duracao') ?? ''}}
            </div>

            <button type="submit" class="btn btn-primary w-25 mx-auto">Editar</button>
        </form>
    </div>

@endsection
