@extends('admin.layouts.app')
@section('title', 'Criar Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection
