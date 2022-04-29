@extends('layouts.app')

@section ('title', 'edit user')

@section('content')

<h1> Edit Register {{$user->name}}</h1>

@include('includes.validations-forms')

<form action="{{route('users.update', $user->id)}}" method="post">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    {{-- diretiva --}}
    @method('PUT')
    @include('users._partials.form')
    <button type="submit">Editar</button>
</form>
@endsection