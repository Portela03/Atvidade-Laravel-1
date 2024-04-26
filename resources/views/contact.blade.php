<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans">
   
    <header>
        @include('layouts.navbar')
    </header>

    <section class="bg-white dark:bg-gray-900">

    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contato</h2>
            <p class="text-gray-700 mb-2"><strong>Email:</strong> e211dir@cps.sp.gov.br</p>
            <p class="text-gray-700 mb-6"><strong>Telefones:</strong> (11) 2045-4016 | (11) 2045-4011</p>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Tem alguma dúvida técnica? Quer enviar feedback sobre nossa instituição?  Deixe-nos saber.</p>
          
           
            <form id="contactForm" class="space-y-8" action="{{ route('enviar.email') }}" method="post" novalidate>
                @csrf
             

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu nome</label>
                    <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Seu nome" required>
                    <div id="nameError" class="text-red-500 text-sm"></div>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu email</label>
                    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="seuemail@exemplo.com" required>
                    <div id="emailError" class="text-red-500 text-sm"></div>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu telefone</label>
                    <input type="tel" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="(XX) XXXX-XXXX" required>
                    <div id="phoneError" class="text-red-500 text-sm"></div>
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sua mensagem</label>
                    <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deixe sua mensagem aqui..." required></textarea>
                    <div id="messageError" class="text-red-500 text-sm"></div>
                 
                </div>
                
                 @if ($message = Session::get('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Sucesso!</strong>
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Erro!</strong>
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                   


                @endif 
               
              
           
                
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-500 sm:w-fit hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">Enviar mensagem</button>
         
          
               
                </form>
        </div>
    </section>

   
    <footer>
        @include('layouts.footer')
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contactForm');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const phoneInput = document.getElementById('phone');
            const messageInput = document.getElementById('message');
            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');
            const messageError = document.getElementById('messageError');

            form.addEventListener('submit', function (event) {
                let isValid = true;

                nameError.textContent = ' ';
                emailError.textContent = ' ';
                phoneError.textContent = ' ';
                messageError.textContent = ' ';

                if (!nameInput.value.trim()) {
                    nameError.textContent = 'Por favor, insira seu nome.';
                    isValid = false;
                }

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(emailInput.value.trim())) {
                    emailError.textContent = 'Por favor, insira um email válido.';
                    isValid = false;
                    email = false
                }

                const phonePattern = /^\d{2}\d{4,5}\d{4}$/;
                if (!phonePattern.test(phoneInput.value.trim())) {
                    phoneError.textContent = 'Por favor, insira um telefone válido.';
                    isValid = false;
                }

                if (!messageInput.value.trim()) {
                    messageError.textContent = 'Por favor, insira sua mensagem.';
                    isValid = false;
                }
                
                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>

</body>

</html>
