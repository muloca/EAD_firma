@extends('admin.layouts.app')


@section('content')

<h1 class="title text-center text-white" style="padding-top: 20px;">Editar Post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <div class="container" style="padding-top: 30px">
        <div class="mb-3">
            <label class="form-label align-items-left text-white">Título do Recado</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{ $post->title }}"">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left text-white">Recado</label>
            <textarea name="content" id="content" cols="30" rows="4"
                placeholder="Conteúdo" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left text-white">Classe</label>
            <select name="classe" class="form-select">
                <option>{{ $post->classe }}</option>
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
            <div style="padding-left: 10px; color: white; font-size: 20px; background-color: red; border: solid" class="form-text">** Sempre verifique a classe selecionada **</div>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

@endsection
