@extends('admin.layouts.app')


@section('content')

<nav class="navbar navbar-light" style="background-color: rgb(9, 158, 171)">
    <div class="container">
        <h1 class="navbar-text" style="color: rgb(143, 57, 135)">Mural</h1>
        <a class="btn btn-secondary btn-sm" href="{{ route('posts.index') }}">Area Restrita</a>
    </div>
</nav>

{{-- <hr> --}}

<div class="container-fluid text-center pt-2" style="background-color: rgb(9, 158, 171)">
    <img src="{{ asset('assets/logo2.png')}}" width="300px" class="pb-2"
    style="background-color: white;border:solid; border-color: white; padding: 10px; border-radius: 10px">
    <h3 class="text-white pt-2 pb-2">Selecione a classe na lista abaixo</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <h1 class="text-white p-2 rounded" style="background-color: rgb(9, 158, 171)">Geral</h1>
                @forelse ($geral as $post)
                    <ul class="list-group p-2 text-center">
                        <a href="{{ route('posts.classe', $post->classe) }}" style="text-decoration: none">
                            <button class="btn btn-outline-light w-100">
                                {{ $post->classe }}
                            </button>
                        </a>
                    </ul>
                @empty

                    <h5 style="color: white">Não há recados</h5>

                @endforelse
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <h1 class="text-white p-2 rounded" style="background-color: rgb(9, 158, 171)">Infantil</h1>
                @forelse ($infantil as $post)
                    <ul class="list-group p-2 text-center">
                        <a href="{{ route('posts.classe', $post->classe) }}" style="text-decoration: none">
                            <button class="btn btn-outline-light w-100">
                                {{ $post->classe }}
                            </button>
                        </a>
                    </ul>
                @empty

                    <h5 style="color: white">Não há recados</h5>

                @endforelse
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <h1 class="text-white p-2 rounded" style="background-color: rgb(9, 158, 171)">Fundamental 1</h1>
                @forelse ($fundamental1 as $post)
                    <ul class="list-group p-2 text-center">
                        <a href="{{ route('posts.classe', $post->classe) }}" style="text-decoration: none">
                            <button class="btn btn-outline-light w-100">
                                {{ $post->classe }}
                            </button>
                        </a>
                    </ul>
                @empty

                    <h5 style="color: white">Não há recados</h5>

                @endforelse
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container  p-3">
                <h1 class="text-white p-2 rounded" style="background-color: rgb(9, 158, 171)">Fundamental 2</h1>
                @forelse ($fundamental2 as $post)
                    <ul class="list-group p-2 text-center">
                        <a href="{{ route('posts.classe', $post->classe) }}" style="text-decoration: none">
                            <button class="btn btn-outline-light w-100">
                                {{ $post->classe }}
                            </button>
                        </a>
                    </ul>

                @empty

                    <h5 style="color: white">Não há recados</h5>

                @endforelse
            </div>
        </div>
        <div class="col-sm-12 col-md12 col-lg-6 col-xl-6">
            <div class="container p-3">
                <h1 class="text-white p-2 rounded" style="background-color: rgb(9, 158, 171)">Ensino Médio</h1>
                @forelse ($medio as $post)
                    <ul class="list-group p-2 text-center">
                        <a href="{{ route('posts.classe', $post->classe) }}" style="text-decoration: none">
                            <button class="btn btn-outline-light w-100">
                                {{ $post->classe }}
                            </button>
                        </a>
                    </ul>
                @empty

                    <h5 style="color: white">Não há recados</h5>

                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
