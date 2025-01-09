@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('matricula.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>
    <div class="w-100 mt-3">
        <form action="{{route('matricula.update', ['matricula' => $matricula->id])}}" method="post" class="mx-auto d-flex flex-column align-baseline" style="width: 900px">
            @csrf
            @method('PUT')

            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Matricula</label>
                <input type="text" class="form-control w-100" name="nome" value="{{$matricula->id}}" disabled>
                {{$errors->first('nome') ?? ''}}

            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Nome</label>
                <input type="nome" class="form-control w-100" name="nome" value="{{$matricula->aluno->nome}}" disabled>
            </div>
            <div class="mb-1 mx-auto" style="width: 500px;">
                <select name="curso_id" class="mt-4 form-select w-100">
                    <option>-- Selecione o Curso --</option>
                    @foreach($cursos as $curso)
                        <option value="{{$curso->id}}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>{{$curso->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-1 mx-auto" style="width: 500px;">
                <label for="exampleInputPassword1" class="form-label">Data de Matricula</label>
                <input type="date" class="form-control w-100" name="data_matricula" value="{{$matricula->data_matricula}}" >
            </div>

            <button type="submit" class="btn btn-primary w-25 mx-auto mt-2">Editar</button>

        </form>
    </div>

@endsection
