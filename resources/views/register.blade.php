@extends('layouts.app')

@section('title', '| Registrar')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form class="mw-100" action="{{ route('signup') }}" method="post" style="width: 400px;">
            @csrf

            <div class="text-center mb-5">
                <img width="150" src="{{ asset('images/logo-capital.png') }}" alt="instact">
            </div>

            <div class="mb-3">
                <input class="form-control" name="name" placeholder="Nome">
            </div>

            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="E-mail">
            </div>

            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Senha">
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="submit">Castrar</button>
                <a class="link-secondary" href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
