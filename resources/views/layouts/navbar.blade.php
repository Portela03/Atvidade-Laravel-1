<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="bg-gray-200 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('home') }}" class="flex items-center">
                    <img class="h-8 w-auto" src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png" alt="Logo">
                </a>
            </div>

            <!-- Botão de responsividade -->
            <div class="block md:hidden">
                <button id="toggleButton" class="text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 7H4v-2h16v2z"/></svg>
                </button>
            </div>

            <!-- Links de navegação -->
            <div id="navLinks" class="hidden md:flex md:items-center md:space-x-4">
                <a href="{{ url('/home') }}" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Início</a>
                <a href="{{ url('about') }}"  class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre</a>
                <a href="{{ url('/services') }}" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Notícias </a>
                <a href="{{ url('/contact') }}" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contato</a>
                <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium ">Dashboard</a>
            </div>
        </div>
    </div>
</nav>

</body>
</html>