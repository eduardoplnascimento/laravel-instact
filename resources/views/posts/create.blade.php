@extends('layouts.app')

@section('title', '| Criar Post')

@section('content')
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <form class="mw-100" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-secondary text-center mb-5">Criar Post</h1>
            <div class="mb-3">
                <input class="form-control" type="file" name="photo" accept="image/*">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="description" rows="3" placeholder="Descrição"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection