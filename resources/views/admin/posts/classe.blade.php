@extends('admin.layouts.app')


@section('content')


    <nav class="navbar navbar-light" style="background-color: rgb(9, 158, 171)">
        <div class="container">
            <h1 class="navbar-text" style="color: purple">Mural</h1>
            <a href="{{ route('posts.inicio') }}">
                <button class="btn btn-sm btn-secondary" type="button">Voltar</button>
            </a>
        </div>
    </nav>

    <div class="container-fluid text-center pt-2 pb-3" style="background-color: rgb(9, 158, 171)">
        <img src="{{ asset('assets/logo2.png') }}" width="300px" class="pb-2"
            style="background-color: white;border:solid; border-color: white; padding: 10px; border-radius: 10px">
    </div>


    @foreach ($cabeca as $c)

        <h1 class="title text-center text-white pt-3 pb-2">Recados: {{ $c->classe }}</h1>

    @endforeach


    <div class="container">
        @foreach ($post as $p)
            <div class="pb-3  d-flex justify-content-center">
                <div class="card w-100">
                    <div class="card-header" style="background-color: rgb(9, 158, 171); color: white">
                        <h3>{{ $p->title }}</h3>
                        <p>{{ $p->classe }}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{!! nl2br(e($p->content)) !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        swal({
            closeOnClickOutside: false,
            closeOnEsc: false,
            title: "Este é um ambiente PRIVADO",
            text: "A cópia ou compartilhamento das mensagens enviadas aqui ou o compartilhamento do link desse mural é proibído!",
            icon: "warning",
            dangerMode: true,
            button: {
                text: "Aceito!"
            }
        });
    </script>

@endsection
