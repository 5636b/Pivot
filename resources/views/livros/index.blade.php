@extends('layouts.pivot')

@section('title', 'Prova')

@section('content')
    <h1>Listagem de Livros <a href="{{ route('livros.create') }}">+</a></h1>


    <ul>
        @foreach ($livro as $livros)
        <li>
            {{$livros->}}
        </li>
        @endforeach
    </ul>
@endsection
