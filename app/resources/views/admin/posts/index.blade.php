@extends('admin.layouts.app')


@section('content')

<div class="text-center" style="padding-top: 15px">
    <div class="column">
        <h1 class="title text-white">Recados</h1>
    </div>
</div>

<div class="text-center" style="padding-right: 15px">
    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#novorecado">Novo Recado</a>
    <a class="btn btn-dark" href="{{ route('posts.inicio') }}">
        Voltar para o Início
    </a>
</div>

<!-- Modal -->
<div class="modal fade" id="novorecado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Recado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif

                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="container" style="padding-top: 30px">
                        <div class="mb-3">
                            <label class="form-label align-items-left">Título do Recado</label>
                            <input class="form-control" type="text" name="title" id="title" placeholder="Título"
                                value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Recado</label>
                            <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"
                                class="form-control">{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Classe</label>
                            <select name="classe" class="form-select">
                                <option>Direção</option>
                                <option>Coordenação</option>
                                <option>Secretaria</option>
                                <option>Infantil III</option>
                                <option>Infantil IV</option>
                                <option>Infantil V</option>
                                <option>1° Fundamental</option>
                                <option>2° A Fundamental</option>
                                <option>2° B Fundamental</option>
                                <option>3° Fundamental</option>
                                <option>4° Fundamental</option>
                                <option>5° Fundamental</option>
                                <option>6° Fundamental</option>
                                <option>7° Fundamental</option>
                                <option>8° Fundamental</option>
                                <option>9° Fundamental</option>
                                <option>1° Médio</option>
                                <option>2° Médio</option>
                                <option>3° Médio</option>
                                <option>Curso Integral</option>
                                <option>Curso Noturno</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@if (session('message'))

    <div class="text-center" style="color: white; padding: 20px">{{ session('message') }}</div>

@endif

@if (session('editado'))

    <div class="text-center" style="color: white; padding: 20px">{{ session('editado') }}</div>

@endif


<div class="container pb-5 pt-5"  style="size: 300px">
    <form class="d-flex" method="post" action="{{ route('posts.search') }}">
        @csrf
        <input class="form-control me-2" name="search" type="text" placeholder="Procurar um recado">
        <button class="btn btn-success" type="submit">Procurar</button>
      </form>
</div>


@foreach ($posts as $post)

    <div class="container" style="padding-bottom: 15px">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Recado: {{ $post->title }}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    classe: {{ $post->classe }}
                </h6>
                <hr>
                <p class="card-text">
                    {!! nl2br(e($post->content)) !!}
                </p>
                <form class="d-flex flex-row-reverse" action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    <div class="input-group flex-nowrap">
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Editar</a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endforeach




<hr>


@if (isset($filters))
    <div class="container">{{ $posts->appends($filters)->links() }}</div>
@else
<div class="container">{{ $posts->links() }}</div>
@endif

@endsection
