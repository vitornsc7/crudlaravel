@extends('master')

@section('content')

<div class="container mx-auto px-4 py-8 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">Bem-vindo ao CRUD de Produtos Laravel</h1>
    <p class="text-gray-600 mb-8">Gerencie seus produtos: crie, visualize, atualize e exclua facilmente.</p>

    <a href="{{ route('products.index') }}" 
       class="inline-block bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md">
       Ver Produtos
    </a>
</div>

@endsection
