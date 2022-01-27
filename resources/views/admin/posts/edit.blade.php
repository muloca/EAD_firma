@extends('admin.layouts.app')


@section('content')

<h1 class="title text-center" style="padding-top: 20px;">Editar Post</h1>

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<option>{{ $post->classe }}</option>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <div class="container" style="padding-top: 30px">
        <div class="mb-3">
            <div class="mb-3">
                <label class="form-label align-items-left">Estado</label>
                <select name="estado" class="form-select" id="estado">
                    <option>{{ $post->estado }}</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label align-items-left">Cidade</label>
                <select name="cidade" class="form-select" id="cidade" disabled="disabled">
                    <option>{{ $post->cidade }}</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Intituição</label>
            <input class="form-control" type="text" name="instituicao" id="instituicao" placeholder="Título" value="{{ $post->instituicao }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Polo</label>
            <input class="form-control" type="text" name="polo" id="polo" placeholder="Título" value="{{ $post->polo }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Telefone</label>
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Título" value="{{ $post->telefone }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Telefone 2</label>
            <input class="form-control" type="text" name="telefone2" id="telefone2" placeholder="Título" value="{{ $post->telefone2 }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Endereço</label>
            <input class="form-control" type="text" name="endereco" id="telefone2" placeholder="Título" value="{{ $post->endereco }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Email</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Título" value="{{ $post->email }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Site</label>
            <input class="form-control" type="text" name="site" id="site" placeholder="Título" value="{{ $post->site }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Facebook</label>
            <input class="form-control" type="text" name="facebook" id="site" placeholder="Título" value="{{ $post->facebook }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Instagram</label>
            <input class="form-control" type="text" name="instagram" id="site" placeholder="Título" value="{{ $post->instagram }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Linkedin</label>
            <input class="form-control" type="text" name="linkedin" id="linkedin" placeholder="Título" value="{{ $post->linkedin }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Twitter</label>
            <input class="form-control" type="text" name="twitter" id="site" placeholder="Título" value="{{ $post->twitter }}">
        </div>
        <div class=" mb-3">
            <label class="form-label align-items-left">Sobre a instituição</label>
            <textarea name="sobre" id="sobre" cols="30" rows="4" placeholder="Conteúdo" class="form-control">{{ $post->sobre }}</textarea>
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
        <label class="form-label align-items-left">Pagante <span style="color: red;">(Situação atual: {{ $post->pagante }})</span></label>
            <select name="pagante" class="form-select" id="pagante" value="{{ old('pagante') }}">
                <option value="Não">Não</option>
                <option value="Sim">Sim</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

@endsection