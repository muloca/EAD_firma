@extends('admin.layouts.app')


@section('content')

<h1 class="title text-center" style="padding-top: 20px; color: purple">Novo Recado</h1>

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
            <input class="form-control" type="text" name="title" id="title" placeholder="Título" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Recado</label>
            <textarea name="content" id="content" cols="30" rows="4"
                placeholder="Conteúdo" class="form-control">{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label align-items-left">Classe</label>
            <select name="classe" class="form-select">
                <option>Diretoria</option>
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

@endsection
