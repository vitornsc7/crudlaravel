@extends('master')

@section('content')

<h2>Create User</h2>

{{-- Mensagem de sucesso/erro vinda da sessão --}}
@if (session()->has('message'))
    <div style="color: green;">
        {{ session()->get('message') }}
    </div>
@endif

{{-- Exibir erros de validação --}}
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name">
    </div>
    <br>

    <div>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email">
    </div>
    <br>

    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Your password">
    </div>
    <br>

    <div>
        <label for="password_confirmation">Confirm Password:</label><br>
        <input type="password" name="password_confirmation" placeholder="Confirm your password">
    </div>
    <br>

    <button type="submit">Create</button>
</form>

@endsection
