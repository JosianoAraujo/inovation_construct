@extends('layouts.app')
@section ('title', 'listagem do usuario')
@section('content')
    <h1>listagem do usuário {{$user->name}}</h1>
    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->created_at}}</li>
    </ul>
@endsection