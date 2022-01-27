@extends('admin.layouts.app')


@section('content')

<div class="text-center" style="padding-top: 15px; padding-bottom: 15px">
    <div class="column">
        <h1 class="title text-white">Banco de Dados EAD</h1>
    </div>
</div>

<div class="text-center" style="padding-right: 15px">
    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#novorecado">Nova Instituição</a>
</div>

<!-- Modal -->
<div class="modal fade" id="novorecado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Instituição</h5>
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
                            <label class="form-label align-items-left">Estado</label>
                            <select name="estado" class="form-select" id="estado" value="{{ old('estado') }}">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Cidade</label>
                            <select name="cidade" class="form-select" id="cidade" value="{{ old('estado') }}" disabled="disabled">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Intituição</label>
                            <input class="form-control" type="text" name="instituicao" id="instituicao" placeholder="Título" value="{{ old('instituicao') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Polo</label>
                            <input class="form-control" type="text" name="polo" id="title" placeholder="Título" value="{{ old('polo') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Telefone</label>
                            <input class="form-control" type="text" name="telefone" id="title" placeholder="Título" value="{{ old('telefone') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Telefone 2</label>
                            <input class="form-control" type="text" name="telefone2" id="title" placeholder="Título" value="{{ old('telefone') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Endereço</label>
                            <input class="form-control" type="text" name="endereco" id="title" placeholder="Título" value="{{ old('telefone') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Email</label>
                            <input class="form-control" type="text" name="email" id="title" placeholder="Título" value="{{ old('telefone') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Site</label>
                            <input class="form-control" type="text" name="site" id="title" placeholder="Título" value="{{ old('site') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Facebook</label>
                            <input class="form-control" type="text" name="facebook" id="title" placeholder="Título" value="{{ old('site') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Instagram</label>
                            <input class="form-control" type="text" name="instagram" id="title" placeholder="Título" value="{{ old('site') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Linkedin</label>
                            <input class="form-control" type="text" name="linkedin" id="title" placeholder="Título" value="{{ old('site') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Twitter</label>
                            <input class="form-control" type="text" name="twitter" id="title" placeholder="Título" value="{{ old('site') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Sobre</label>
                            <textarea name="sobre" id="content" cols="30" rows="4" placeholder="Conteúdo" class="form-control">{{ old('content') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label align-items-left">Imagem</label>
                            <input class="form-control" type="file" name="imagem" id="title" placeholder="Título" value="{{ old('imagem') }}">
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" value="1" id="pagante" name="pagante">
                            <label for="pagante" class="form-check-label">Pagante</label>
                        </div> -->
                        <div>
                            <select name="pagante" class="form-select" id="pagante" value="{{ old('pagante') }}">
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
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


<div class="container pb-5 pt-5" style="size: 300px">
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
                Estado: {{ $post->estado }}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                cidade: {{ $post->cidade }}
            </h6>
            <hr>
            <p class="card-text">
                {!! nl2br(e($post->instituicao)) !!}
            </p>
            <p class="card-text">
                <a href="tel:{{$post->telefone}}">{!! nl2br(e($post->telefone)) !!}</a>
            </p>
            <p class="card-text">
                <a href="tel:{{$post->telefone2}}">{!! nl2br(e($post->telefone2)) !!}</a>
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