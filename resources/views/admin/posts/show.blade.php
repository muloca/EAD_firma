@extends('admin.layouts.app')


@section('content')

<h1>Detalhe do Post {{ $post->title }}</h1>

<h3>{{ $post->content }}</h3>
<h4>{{ $post->classe }}</h4>
<a href="{{ route('posts.index') }}">Voltar</a>

<form action="{{ route('posts.destroy', $post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletear {{ $post->title}}</button>
</form>

@endsection
