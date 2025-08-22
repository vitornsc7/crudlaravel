@extends('master')

@section('content')



<div class="container mx-auto px-4 py-8 max-w-2xl">
    <div class="mb-6 text-center flex flex-row gap-6 justify-center">
        <a href="{{ route('products.index') }}" 
        class="inline-block bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200 shadow-md mb-4">
            ← Voltar
        </a>

        <h1 class="text-3xl font-bold text-gray-800">Produto - {{ $product->name }}</h1>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6">
        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-700">Nome:</h2>
            <p class="text-gray-600">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-700">Preço:</h2>
            <p class="text-gray-600">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
        </div>

        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-700">Descrição:</h2>
            <p class="text-gray-600">{{ $product->description }}</p>
        </div>

        <div class="flex justify-between">
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-none text-gray-500 underline font-medium py-2 transition duration-200">
                    Excluir Produto
                </button>
            </form>
            
            <a href="{{ route('products.edit', $product->id) }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200 shadow-sm">
                Editar Produto
            </a>
        </div>
    </div>
</div>

@endsection
