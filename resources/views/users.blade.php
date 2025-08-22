@extends('master')
@section('content')

<div class="container mx-auto px-4 py-8 max-w-4xl">
  <header class="mb-8 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-2">CRUD de Usuários</h1>
    <p class="text-gray-600">Gerencie usuários: crie, visualize, atualize e exclua com Laravel, Vite e Tailwind</p>
  </header>

  <div class="bg-white rounded-xl shadow-sm overflow-hidden card-hover">
    <div class="flex flex-row sm:flex-row justify-between items-center p-6 border-b border-gray-200">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4 sm:mb-0">
        <i class="fas fa-users mr-2 text-gray-600"></i>Lista de Usuários
      </h2>
      <a href="{{ route('users.create') }}" class="flex items-center justify-center bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 px-6 rounded-lg transition duration-200 shadow-md">
        <i class="fas fa-plus-circle mr-2"></i>
        Novo Usuário
      </a>
    </div>

    <div class="p-6">
        @if ($users->count() > 0)
          <ul class="divide-y divide-gray-200">
              @foreach ($users as $user)
              <li class="py-5 px-4 rounded-lg transition duration-150">
                <div class="flex flex-row sm:flex-row sm:items-center justify-between">
                    <div class="mb-3 sm:mb-0">
                      <h3 class="text-lg font-medium text-gray-800">
                        <i class="fas fa-user-circle mr-2 text-gray-500"></i>{{ $user->name }}
                      </h3>
                      <p class="text-gray-600 text-sm mt-1"><i class="fas fa-id-card mr-2 text-gray-400"></i>ID: {{ $user->id }}</p>
                    </div>
                    <div class="flex space-x-2">
                      <a href="{{ route('users.show',['user' => $user->id]) }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200 flex items-center">
                        <i class="fas fa-eye mr-1"></i> Visualizar
                      </a>
                      <a href="{{ route('users.edit',['user' => $user->id]) }}" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200 flex items-center">
                        <i class="fas fa-edit mr-1"></i> Editar
                      </a>
                  </div>
                </div>
              </li>
              @endforeach
          </ul>
        @else
          <div class="text-center py-12">
              <i class="fas fa-users text-6xl text-gray-300 mb-6"></i>
              <p class="text-xl text-gray-500 mb-4">Nenhum usuário cadastrado ainda.</p>
              <a href="{{ route('users.create') }}" class="inline-flex items-center mt-4 text-gray-600 hover:text-gray-800 font-medium transition duration-200">
                  <i class="fas fa-plus-circle mr-2"></i>Cadastrar primeiro usuário
              </a>
          </div>
        @endif
    </div>

    @if ($users->count() > 0)
    <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
      <p class="text-sm text-gray-600"><i class="fas fa-info-circle mr-2"></i>Total de {{ $users->count() }} usuário(s) cadastrado(s)</p>
    </div>
    @endif
  </div>

  <footer class="mt-12 text-center text-gray-500 text-sm">
    <p>© {{ date('Y') }} Sistema CRUD em Laravel por Vitor do Nascimento.</p>
  </footer>
</div>

@endsection