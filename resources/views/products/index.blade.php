@extends('master')
@section('content')

<div class="container mx-auto px-4 py-8 max-w-4xl">
  <div class="mb-8 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-2">CRUD de Produtos Laravel</h1>
    <p class="text-gray-600">Gerencie produtos: crie, visualize, atualize e exclua com Laravel, Vite e Tailwind</p>
  </div>

  <div class="bg-white rounded-xl shadow-sm overflow-hidden card-hover">
    <div class="flex flex-row sm:flex-row justify-between items-center p-6 border-b border-gray-200">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4 sm:mb-0">
        Lista de Produtos
      </h2>
      <a href="{{ route('products.create') }}" class="flex items-center justify-center bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md">
        Novo Produto
      </a>
    </div>

    <div class="p-2">
        @if ($products->count() > 0)
          <ul class="divide-y divide-gray-200">
              @foreach ($products as $product)
              <li class="py-5 px-4 rounded-lg transition duration-150">
                <div class="flex flex-row sm:flex-row sm:items-center justify-between">
                    <div class="mb-3 sm:mb-0">
                      <h3 class="text-lg font-medium text-gray-800">
                        {{ $product->name }}
                      </h3>
                      <p class="text-gray-600 text-sm mt-1">ID: {{ $product->id }}</p>
                    </div>
                    <div class="flex space-x-2">
                      <a href="{{ route('products.show',['product' => $product->id]) }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200 flex items-center">
                        Visualizar
                      </a>
                      <a href="{{ route('products.edit',['product' => $product->id]) }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200 flex items-center">
                        Editar
                      </a>
                  </div>
                </div>
              </li>
              @endforeach
          </ul>
        @else
          <div class="text-center py-12">
              <p class="text-xl text-gray-500 mb-4">Nenhum produto cadastrado ainda.</p>
              <a href="{{ route('products.create') }}" class="inline-flex items-center mt-4 text-gray-600 hover:text-gray-800 font-medium transition duration-200">
                  Cadastrar primeiro produto
              </a>
          </div>
        @endif
    </div>

    @if ($products->count() > 0)
    <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
      Total de {{ $products->count() }} produto(s) cadastrado(s)</p>
    </div>
    @endif
  </div>
</div>

@endsection