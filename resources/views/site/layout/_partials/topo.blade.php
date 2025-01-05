<nav class="navbar bg-dark border-bottom border-body navbar" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Base de conhecimento</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aluno.index')}}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('curso.index')}}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Matriculas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>