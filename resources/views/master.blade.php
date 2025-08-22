<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-200 flex flex-col align-items-center justify-center min-h-screen">
    @yield('content')
</body>

<footer class="mt-12 text-center text-gray-500 text-sm">
<p>© {{ date('Y') }} Sistema CRUD em Laravel por Vitor do Nascimento.</p>
</footer>

</html>