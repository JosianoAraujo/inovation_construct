@extends('layouts.app')

@section ('title', 'Cadastro user')

@section('content')

<h1> New Register</h1>

@include('includes.validations-forms')

<form action="{{route('users.store')}}" method="post">
    @include('users._partials.form')
    <button type="submit">Enviar</button>
</form>
@endsection