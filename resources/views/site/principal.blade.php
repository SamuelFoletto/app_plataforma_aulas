@extends('site.layout.basico')
@section('titulo', 'DB Wiki')

@section('conteudo')

    <div id="carouselExample" class="carousel slide" style="height: 90vh">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="{{asset('img/fundo1.png')}}" style="height: 90vh; width: 100%" alt="Imagem">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/fundo2.png')}}" style="height: 90vh; width: 100%" alt="Imagem">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
