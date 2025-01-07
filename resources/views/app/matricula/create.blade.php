@extends('site.layout.basico')
@section('titulo', 'BC - Alunos')


@section('conteudo')
    <div class="fs-4 fw-bolder text-center">
        <p>Matricular Aluno</p>
    </div>
    <div>
        <ul class="d-flex justify-content-end list-unstyled">
            <li class="me-2 mt-2"><a href="{{route('curso.index')}}"><button type="button" class="btn btn-primary btn-sm">Voltar</button></a></li>
        </ul>
    </div>
    <div class="w-100 mt-3">
        <form action="{{route('matricula.store')}}" method="post" class="mx-auto d-flex flex-column" style="width: 500px;">
            @csrf

            <select name="aluno_id" class="form-select w-100 mx-auto">
                <option>-- Selecione o Aluno --</option>
                @foreach($alunos as $aluno)
                    <option value="{{$aluno->id}}" {{ old('aluno_id') == $aluno->id ? 'selected' : '' }}>{{$aluno->nome}}</option>
                @endforeach
            </select>

            <select name="curso_id" class="mt-4 form-select w-100 mx-auto">
                <option>-- Selecione o Curso --</option>
                @foreach($cursos as $curso)
                    <option value="{{$curso->id}}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>{{$curso->nome}}</option>
                @endforeach
            </select>

            <div class="mb-1 mx-auto" style="width: 500px;">
                <label class="form-label">Data da matricula</label>
                <input type="date" class="form-control w-100" name="data_matricula">
                {{$errors->first('data_matricula') ?? ''}}
            </div>

            <button type="submit" class="btn btn-primary w-25 mx-auto mt-2">Matricular</button>

        </form>
    </div>

@endsection
