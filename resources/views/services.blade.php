<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-700 text-white">
@include('layouts.navbar')
    

    <!-- Cabeçalho dos serviços -->
    <div class="bg-gray-700 text-white py-8 px-4 text-center">
        <h1 class="text-3xl font-bold">Nossos Serviços</h1>
        <p class="mt-2">Conheça os serviços que oferecemos para atender às suas necessidades.</p>
    </div>

    <!-- Conteúdo dos serviços -->
    <div class="container mx-auto my-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cartão do serviço 1 -->
            <div class="bg-gray-800 text-white p-6 rounded shadow-md">
                <h2 class="text-xl font-bold mb-2">Serviço 1</h2>
                <p class="text-gray-300 mb-4">Descrição do serviço 1.</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Saber Mais</button>
            </div>

            <!-- Cartão do serviço 2 -->
            <div class="bg-gray-800 text-white p-6 rounded shadow-md">
                <h2 class="text-xl font-bold mb-2">Serviço 2</h2>
                <p class="text-gray-300 mb-4">Descrição do serviço 2.</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Saber Mais</button>
            </div>

            <!-- Cartão do serviço 3 -->
            <div class="bg-gray-800 text-white p-6 rounded shadow-md">
                <h2 class="text-xl font-bold mb-2">Serviço 3</h2>
                <p class="text-gray-300 mb-4">Descrição do serviço 3.</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Saber Mais</button>
            </div>

            <!-- Adicione mais cartões de serviço conforme necessário -->
        </div>
    </div>
</body>
</html>
