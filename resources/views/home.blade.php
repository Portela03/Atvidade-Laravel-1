<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Incluir folha de estilos do Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 font-sans">
@include('layouts.navbar')
<div class="relative">
    <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" alt="foto-etec" class="w-full h-auto">
    <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-12 mt-18">
        <h1 class="text-4xl font-bold mb-4 max-w-md">Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</h1>
        <a href="{{ url('about') }}" class="inline-block">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Sobre nós</button></a>
    </div>
</div>

<div>


<div class="flex bg-white rounded-lg" style="width: 80%;  margin: 50px;">
    <div class="w- p-4 " style="width: 80%; " >
        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="etec" class="w-full border border-gray-300 rounded-lg">
    </div>
    
    <div class=" p-4">
        <h1 class="text-2xl font-bold">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h1>
        <p class="mt-4">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
       
    </div>
</div>
<div class="flex bg-white rounded-lg" style="width: 80%;  margin-left: 350px;">
    <div class="w- p-4 " style="width: 80%; " >
        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="etec" class="w-full border border-gray-300 rounded-lg">
    </div>
    
    <div class=" p-4">
        <h1 class="text-2xl font-bold">Excelência Educacional</h1>
        <p class="mt-4">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
        
    </div>
</div>
<div class="flex bg-white rounded-lg" style="width: 80%;  margin: 50px;">
    <div class="w- p-4 " style="width: 80%; " >
        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg" alt="etec" class="w-full border border-gray-300 rounded-lg">
    </div>
    
    <div class=" p-4">
        <h1 class="text-2xl font-bold">O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h1>
        <p class="mt-4">Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
       
    </div>
</div>






</div>




<footer>
    @include('layouts.footer')
</footer>


</body>
</html>
