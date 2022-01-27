@extends('admin.layouts.app')


@section('content')

<nav class="navbar navbar-light">
    <div class="container">
        <img src="{{URL::asset('assets/logo_ead.png')}}" alt="logo" class="logo" style="max-width: 250px;">
        <span style="font-size: 20px; font-weight: bold">O maior portal EAD do Brasil</span>
    </div>
</nav>

{{-- <hr> --}}

<section class="promo1">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD" target="_blank" style="text-decoration: none;">
                        <img src="{{URL::asset('assets/inicio1.png')}}" class="d-block w-100" alt="profile Pic">
                    </a>
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>Clique na imagem</h5>
                        <p>E tenha condições especiais.</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD" target="_blank">
                        <img src="{{URL::asset('assets/inicio2.png')}}" class="d-block w-100" alt="profile Pic">
                    </a>
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>Clique na imagem</h5>
                        <p>E tenha condições especiais.</p>
                    </div> -->

                </div>
                <div class="carousel-item">
                    <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD" target="_blank">
                        <img src="{{URL::asset('assets/inicio3.png')}}" class="d-block w-100" alt="profile Pic">
                    </a>
                    <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>Clique na imagem</h5>
                        <p>E tenha condições especiais.</p>
                    </div> -->

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<div class="container-fluid text-center pt-2">
    <!--<img src="{{ asset('assets/logo2.png') }}" width="300px" class="pb-2"
                        style="background-color: black;border:solid; border-color: black; padding: 10px; border-radius: 10px">-->
    <h3 class="text-black pt-2 pb-2">Selecione sua cidade na lista abaixo</h3>
</div>

<div class="container">
    <div class="row">


        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionAcre">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAcre">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAcre" aria-expanded="false" aria-controls="collapseAcre">
                                Acre
                            </button>
                        </h2>
                        <div id="collapseAcre" class="accordion-collapse collapse" aria-labelledby="headingAcre" data-bs-parent="#accordionAcre">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ac as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionAlagoas">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAlagoas">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlagoas" aria-expanded="false" aria-controls="collapseAlagoas">
                                Alagoas
                            </button>
                        </h2>
                        <div id="collapseAlagoas" class="accordion-collapse collapse" aria-labelledby="headingAlagoas" data-bs-parent="#accordionAlagoas">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($al as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionAmapa">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAmapa">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAmapa" aria-expanded="false" aria-controls="collapseAmapa">
                                Amapá
                            </button>
                        </h2>
                        <div id="collapseAmapa" class="accordion-collapse collapse" aria-labelledby="headingAmapa" data-bs-parent="#accordionAmapa">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ap as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionAmazonas">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingAmazonas">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAmazonas" aria-expanded="false" aria-controls="collapseAmazonas">
                                Amazonas
                            </button>
                        </h2>
                        <div id="collapseAmazonas" class="accordion-collapse collapse" aria-labelledby="headingAmazonas" data-bs-parent="#accordionAmazonas">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($am as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionBahia">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBahia">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBahia" aria-expanded="false" aria-controls="collapseBahia">
                                Bahia
                            </button>
                        </h2>
                        <div id="collapseBahia" class="accordion-collapse collapse" aria-labelledby="headingBahia" data-bs-parent="#accordionBahia">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ba as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionCeara">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCeara">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCeara" aria-expanded="false" aria-controls="collapseCeara">
                                Ceará
                            </button>
                        </h2>
                        <div id="collapseCeara" class="accordion-collapse collapse" aria-labelledby="headingCeara" data-bs-parent="#accordionCeara">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ce as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionDistitoFederal">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingDistitoFederal">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDistitoFederal" aria-expanded="false" aria-controls="collapseDistitoFederal">
                                Distrito Federal
                            </button>
                        </h2>
                        <div id="collapseDistitoFederal" class="accordion-collapse collapse" aria-labelledby="headingDistitoFederal" data-bs-parent="#accordionDistitoFederal">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($df as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionEspiritosanto">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEspiritosanto">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEspiritosanto" aria-expanded="false" aria-controls="collapseEspiritosanto">
                                Espírito Santo
                            </button>
                        </h2>
                        <div id="collapseEspiritosanto" class="accordion-collapse collapse" aria-labelledby="headingEspiritosanto" data-bs-parent="#accordionEspiritosanto">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($es as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionGoias">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingGoias">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGoias" aria-expanded="false" aria-controls="collapseGoias">
                                Goiás
                            </button>
                        </h2>
                        <div id="collapseGoias" class="accordion-collapse collapse" aria-labelledby="headingGoias" data-bs-parent="#accordionGoias">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($go as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionMaranhao">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMaranhao">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMaranhao" aria-expanded="false" aria-controls="collapseMaranhao">
                                Maranhão
                            </button>
                        </h2>
                        <div id="collapseMaranhao" class="accordion-collapse collapse" aria-labelledby="headingMaranhao" data-bs-parent="#accordionMaranhao">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ma as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionMatoGrosso">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMatoGrosso">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMatoGrosso" aria-expanded="false" aria-controls="collapseMatoGrosso">
                                Mato Grosso
                            </button>
                        </h2>
                        <div id="collapseMatoGrosso" class="accordion-collapse collapse" aria-labelledby="headingMatoGrosso" data-bs-parent="#accordionMatoGrosso">

                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                @forelse ($mt as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionMatoGrossodoSul">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMatoGrossodoSul">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMatoGrossodoSul" aria-expanded="false" aria-controls="collapseMatoGrossodoSul">
                                Mato Grosso do Sul
                            </button>
                        </h2>
                        <div id="collapseMatoGrossodoSul" class="accordion-collapse collapse" aria-labelledby="headingMatoGrossodoSul" data-bs-parent="#accordionMatoGrossodoSul">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($mt as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionMinasGerais">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMinasGerais">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMinasGerais" aria-expanded="false" aria-controls="collapseMinasGerais">
                                Minas Gerais
                            </button>
                        </h2>
                        <div id="collapseMinasGerais" class="accordion-collapse collapse" aria-labelledby="headingMinasGerais" data-bs-parent="#accordionMinasGerais">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($mg as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionPara">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPara">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePara" aria-expanded="false" aria-controls="collapsePara">
                                Pará
                            </button>
                        </h2>
                        <div id="collapsePara" class="accordion-collapse collapse" aria-labelledby="headingAlagoas" data-bs-parent="#accordionPara">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($pa as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionParaiba">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingParaiba">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseParaiba" aria-expanded="false" aria-controls="collapseParaiba">
                                Paraíba
                            </button>
                        </h2>
                        <div id="collapseParaiba" class="accordion-collapse collapse" aria-labelledby="headingParaiba" data-bs-parent="#accordionParaiba">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($pb as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionParana">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingParana">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseParana" aria-expanded="false" aria-controls="collapseParana">
                                Paraná
                            </button>
                        </h2>
                        <div id="collapseParana" class="accordion-collapse collapse" aria-labelledby="headingParana" data-bs-parent="#accordionParana">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($pr as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            @if($post->telefone2 != null)
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            @endif
                                            @if($post->endereco != null)
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            @endif
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionPernanbuco">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPernanbuco">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePernanbuco" aria-expanded="false" aria-controls="collapsePernanbuco">
                                Pernanbuco
                            </button>
                        </h2>
                        <div id="collapsePernanbuco" class="accordion-collapse collapse" aria-labelledby="headingPernanbuco" data-bs-parent="#accordionPernanbuco">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($pe as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionPiaui">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPiaui">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePiaui" aria-expanded="false" aria-controls="collapsePiaui">
                                Piauí
                            </button>
                        </h2>
                        <div id="collapsePiaui" class="accordion-collapse collapse" aria-labelledby="headingPiaui" data-bs-parent="#accordionPiaui">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($pi as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionRiodeJaneiro">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRiodeJaneiro">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRiodeJaneiro" aria-expanded="false" aria-controls="collapseRiodeJaneiro">
                                Rio de Janeiro
                            </button>
                        </h2>
                        <div id="collapseRiodeJaneiro" class="accordion-collapse collapse" aria-labelledby="headingRiodeJaneiro" data-bs-parent="#accordionRiodeJaneiro">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($rj as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionRioGrandedoNorte">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRioGrandedoNorte">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRioGrandedoNorte" aria-expanded="false" aria-controls="collapseRioGrandedoNorte">
                                Rio Grande do Norte
                            </button>
                        </h2>
                        <div id="collapseRioGrandedoNorte" class="accordion-collapse collapse" aria-labelledby="headingRioGrandedoNorte" data-bs-parent="#accordionRioGrandedoNorte">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($rn as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionRioGrandedoSul">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRioGrandedoSul">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRioGrandedoSul" aria-expanded="false" aria-controls="collapseRioGrandedoSul">
                                Rio Grande do Sul
                            </button>
                        </h2>
                        <div id="collapseRioGrandedoSul" class="accordion-collapse collapse" aria-labelledby="headingRioGrandedoSul" data-bs-parent="#accordionRioGrandedoSul">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($rs as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionRondonia">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRondonia">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRondonia" aria-expanded="false" aria-controls="collapseRondonia">
                                Rondônia
                            </button>
                        </h2>
                        <div id="collapseRondonia" class="accordion-collapse collapse" aria-labelledby="headingRondonia" data-bs-parent="#accordionRondonia">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($ro as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionRoraima">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingRoraima">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRoraima" aria-expanded="false" aria-controls="collapseRoraima">
                                Roraima
                            </button>
                        </h2>
                        <div id="collapseRoraima" class="accordion-collapse collapse" aria-labelledby="headingRoraima" data-bs-parent="#accordionRoraima">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($rr as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionSantaCatarina">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSantaCatarina">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSantaCatarina" aria-expanded="false" aria-controls="collapseSantaCatarina">
                                Santa Catarina
                            </button>
                        </h2>
                        <div id="collapseSantaCatarina" class="accordion-collapse collapse" aria-labelledby="headingSantaCatarina" data-bs-parent="#accordionSantaCatarina">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($sc as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionSaoPaulo">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSaoPaulo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaoPaulo" aria-expanded="false" aria-controls="collapseSaoPaulo">
                                São Paulo
                            </button>
                        </h2>
                        <div id="collapseSaoPaulo" class="accordion-collapse collapse" aria-labelledby="headingSaoPaulo" data-bs-parent="#accordionSaoPaulo">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($sp as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordionSergipe">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSergipe">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSergipe" aria-expanded="false" aria-controls="collapseSergipe">
                                Sergipe
                            </button>
                        </h2>
                        <div id="collapseSergipe" class="accordion-collapse collapse" aria-labelledby="headingSergipe" data-bs-parent="#accordionSergipe">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($se as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <div class="accordion accordion-flush" id="accordiontocantins">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingtocantins">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetocantins" aria-expanded="false" aria-controls="collapsetocantins">
                                Tocantins
                            </button>
                        </h2>
                        <div id="collapsetocantins" class="accordion-collapse collapse" aria-labelledby="headingtocantins" data-bs-parent="#accordiontocantins">
                            <div>
                                <div class="card text-center">
                                    <div class="card-header">
                                        Seu Anúnio aqui
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Entre em contato conosco</h5>
                                        <p class="card-text">E tenha a sua faculdade em primeiro da lista no seu Estado</p>
                                        <a href="mailto:contato@estudoadistancia.com.br" target="_blank">Email</a>
                                        <a href="tel:43996730232">Ligar</a>
                                        <a href="https://api.whatsapp.com/send?phone=5543996730232&text=Gostaria%20de%20me%20informar%20sobre%20anuncio%20na%20plataforma%20EAD">Whatsapp</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-body">
                                @forelse ($to as $post)
                                @if($post->pagante === 'Sim')
                                <ul class="list-group p-2">
                                    <div class="card">
                                        <div class="card-header-pagante">
                                            {{ $post->cidade }}
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->polo }}</h5>
                                            <p class="card-text">{{ $post->instituicao }}</p>
                                            <p>
                                                <a href="tel:{{$post->telefone}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone }}</button>
                                                </a>
                                            </p>
                                            <p>
                                                <a href="tel:{{$post->telefone2}}" class="a-pagante">
                                                <button class="btn btn-outline-dark">{{ $post->telefone2 }}</button>
                                                </a>
                                            </p>
                                            <a class="a-pagante" href="https://google.com/maps/place/{{$post->endereco}}+{{$post->cidade}}+{{$post->estado}}" target="_blank">
                                                <button class="btn btn-outline-dark">{{ $post->endereco}}</button>
                                            </a>
                                            <p class="card-text pt-3">{{ $post->sobre }}</p>
                                        </div>
                                        <button class="btn-facebook m-3 p-2">Facebook</button>
                                    </div>
                                    <hr>
                                </ul>
                                @else
                                <ul class="list-group">
                                    <div>
                                        <ul>
                                            <li>
                                                <div>
                                                    {{ $post->cidade }}
                                                </div>
                                                <div>
                                                    <h5>{{ $post->polo}}</h5>
                                                    <p>{{ $post->instituicao}}</p>
                                                    <p>{{ $post->telefone}}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                </ul>
                                @endif
                                @empty

                                <h5 style="color: black">Ainda não temos unidades cadastradas nesse estado</h5>

                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">

        <!-- Section: Links  -->
        <section class="pt-1">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Estudo a distância
                        </h6>
                        <p>
                            O maior portal de faculdades a distância do Brasil
                        </p>
                        <p>
                            Aqui você vai encontrar a sua faculdade
                        </p>
                        <p>
                            Se TEM está AQUI
                        </p>
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contato
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Jacarezinho - Paraná</p>
                        <a href="mailto:contato@estudoadistancia.com.br" style="text-decoration:none; color:black">
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                contato@estudoadistancia.com.br
                            </p>
                        </a>
                        <a href="tel:43996730232" style="text-decoration:none; color:black">
                            <p>
                                <i class="fas fa-phone me-3"></i>
                                (43) 99673-0232
                            </p>
                        </a>
                        <div class="pb-3">
                            <a href="#" class="me-4 text-reset">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="me-4 text-reset">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="me-4 text-reset">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mlcdigital.com.br/">MLCdigital</a>
        </div>
        <!-- Copyright -->
    </footer>
</div>

@endsection