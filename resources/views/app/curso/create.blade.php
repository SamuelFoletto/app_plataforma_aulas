@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('curso.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>
    <div class="w-100 mt-3">
        <form action="{{route('curso.store')}}" method="post" class="mx-auto d-flex flex-column align-baseline" style="width: 900px;">
            @csrf
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control w-100" name="nome">
                {{$errors->first('nome') ?? ''}}

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Descrição</label>
                <input type="text" class="form-control w-100" name="descricao">
                {{$errors->first('descricao') ?? ''}}
            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Duração (Em horas)</label>
                <input type="number" class="form-control w-100" name="duracao">
                {{$errors->first('duracao') ?? ''}}
            </div>

            <button type="submit" class="btn btn-primary w-25 mx-auto">Cadastrar</button>
        </form>
    </div>

@endsection
