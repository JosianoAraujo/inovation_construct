@extends('layouts.app')
@section('title', 'listagem dos usuários')
@section('content')
<ul>
    <h1>Listagem dos usuários
        (<a href="{{route('users.create')}}">+</a>)
    </h1>
    <form action="{{route('users.index')}}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">

        <button>Buscar</button>

    </form>
    <br>

    @foreach($users as $user)
        <li>
            {{$user->name}} - 
            {{$user->email}}
            | <a href="{{route('users.show', $user->id)}}">Details</a>
            | <a href="{{route('users.edit', $user->id)}}">Edit</a>
        </li>
    @endforeach
</ul>

@endsection
