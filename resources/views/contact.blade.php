<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 font-sans">
@include('layouts.navbar')
    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md">
        <h1 class="text-3xl font-bold mb-4">Contato</h1>
        <p class="text-gray-700 mb-6">Entre em contato conosco para qualquer dúvida ou consulta. Estamos aqui para ajudar!</p>
        
        <!-- Informações de contato adicionadas -->
        <p class="text-gray-700 mb-2"><strong>E-mail:</strong> e211dir@cps.sp.gov.br</p>
        <p class="text-gray-700 mb-6"><strong>Telefones:</strong> (11) 2045-4016 | (11) 2045-4011</p>
        
        <form>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nome</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Seu nome" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Seu email" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Mensagem</label>
                <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Sua mensagem" required></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
