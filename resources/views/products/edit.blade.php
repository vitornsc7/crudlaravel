@extends('master')

@section('content')

<div class="container mx-auto px-4 py-8 max-w-2xl">
    <div class="mb-6 text-center">
        <h1 class="text-3xl font-bold text-gray-800">Editar Produto</h1>
        <p class="text-gray-600 mt-2">Atualize os dados do produto abaixo.</p>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session()->get('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-md p-6">
        <form class="flex flex-col gap-4" action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-1" for="name">Nome do Produto</label>
                <input 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-400 focus:outline-none" 
                    type="text" 
                    name="name" 
                    value="{{ old('name', $product->name) }}" 
                    placeholder="Nome do produto"
                    required
                >
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1" for="price">Preço</label>
                <input 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-400 focus:outline-none" 
                    type="number" 
                    name="price" 
                    value="{{ old('price', $product->price) }}" 
                    placeholder="Valor do produto"
                    step="0.01"
                    required
                >
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1" for="description">Descrição</label>
                <textarea 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-400 focus:outline-none" 
                    name="description" 
                    placeholder="Descrição do produto"
                    rows="4"
                >{{ old('description', $product->description) }}</textarea>
            </div>

            <button 
                type="submit" 
                class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md mt-4"
            >
                Atualizar Produto
            </button>
        </form>
    </div>
</div>

@endsection