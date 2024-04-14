<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
   



<footer class="p-4 bg-gray-100 md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
    <div class="flex-shrink-0">
                <a href="{{ url('home') }}" class="flex items-center">
                    <img class="h-8 w-auto" src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png" alt="Logo">
                </a>
            </div>
       
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
        <a href="{{ url('/home') }}" class="mr-4 hover:underline md:mr-6">Início</a>
        <a href="{{ url('about') }}"  class="mr-4 hover:underline md:mr-6">Sobre</a>
                <a href="{{ url('/services') }}" class="mr-4 hover:underline md:mr-6">Notícias </a>
                <a href="{{ url('/contact') }}" class="mr-4 hover:underline md:mr-6">Contato</a>
                <a href="{{ url('/dashboard') }}" class="mr-4 hover:underline md:mr-6">Dashboard</a>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Etec Zona Leste. Todos os direitos reservados. Todos os Direitos Reservados.</span>
    </div>
</footer>

</body>
</html>
