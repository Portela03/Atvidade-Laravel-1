<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: none; /* Oculta a mensagem de erro inicialmente */
        }
    </style>
</head>

<body class="bg-gray-200 font-sans">
    <!-- Navbar (supondo que exista um arquivo layouts.navbar) -->
    <header>
        @include('layouts.navbar')
    </header>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contato</h2>
            <p class="text-gray-700 mb-2"><strong>Email:</strong> e211dir@cps.sp.gov.br</p>
            <p class="text-gray-700 mb-6"><strong>Telefones:</strong> (11) 2045-4016 | (11) 2045-4011</p>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Tem alguma dúvida técnica? Quer enviar feedback sobre nossa instituição?  Deixe-nos saber.</p>
            <form id="contactForm" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu email</label>
                    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="seuemail@exemplo.com" required>
                    <div id="emailError" class="error-message"></div>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Seu telefone</label>
                    <input type="tel" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="(XX) XXXX-XXXX" required>
                    <div id="phoneError" class="error-message"></div>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Assunto</label>
                    <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Como podemos ajudar?" required>
                    <div id="subjectError" class="error-message"></div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sua mensagem</label>
                    <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deixe sua mensagem aqui..." required></textarea>
                    <div id="messageError" class="error-message"></div>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-500 sm:w-fit hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">Enviar mensagem</button>
            </form>
        </div>
    </section>

    <!-- Footer (supondo que exista um arquivo layouts.footer) -->
    <footer>
        @include('layouts.footer')
    </footer>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Removendo mensagens de erro existentes
            document.querySelectorAll('.error-message').forEach(function(element) {
                element.textContent = '';
                element.style.display = 'none'; // Oculta a mensagem de erro
            });

            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phoneRegex = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;
            var isValid = true;

            if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Por favor, insira um endereço de e-mail válido.';
                document.getElementById('emailError').style.display = 'block'; // Exibe a mensagem de erro
                isValid = false;
            }

            if (!phoneRegex.test(phone)) {
                document.getElementById('phoneError').textContent = 'Por favor, insira um número de telefone válido no formato (XX) XXXX-XXXX.';
                document.getElementById('phoneError').style.display = 'block'; // Exibe a mensagem de erro
                isValid = false;
            }

            if (subject.trim() === '') {
                document.getElementById('subjectError').textContent = 'Por favor, insira o assunto.';
                document.getElementById('subjectError').style.display = 'block'; // Exibe a mensagem de erro
                isValid = false;
            }

            if (message.trim() === '') {
                document.getElementById('messageError').textContent = 'Por favor, insira a mensagem.';
                document.getElementById('messageError').style.display = 'block'; // Exibe a mensagem de erro
                isValid = false;
            }

            if (isValid) {
                alert('Formulário enviado com sucesso!');
            }
        });
    </script>
</body>

</html>
