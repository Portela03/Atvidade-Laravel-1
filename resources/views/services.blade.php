<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="text-white">
    @include('layouts.navbar')

    <!-- Cabeçalho dos cursos -->
    <div class="text-black py-8 px-4 text-center">
    <h1 class="text-3xl font-bold">Inscrições Abertas para os Cursos!</h1>
    <p class="mt-2">A ETEC Zona Leste está com as inscrições abertas para seus cursos técnicos e Novotec. Esta é a oportunidade perfeita para você se capacitar em uma área específica e impulsionar sua carreira profissional.</p>
    <p class="mt-2">Nossos cursos são projetados para fornecer aos alunos o desenvolvimento de habilidades e conhecimentos práticos em diversas áreas, desde desenvolvimento de sistemas até serviços jurídicos, recursos humanos, logística, contabilidade e administração.</p>
    <p class="mt-2">Não perca essa chance de investir no seu futuro e adquirir uma formação de qualidade. Inscreva-se agora e faça parte do excelente repertório educacional oferecido pela ETEC Zona Leste!</p>
</div>

    <div class="flex flex-wrap justify-center gap-8">
        <!-- Curso Técnico em Desenvolvimento de Sistemas -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-1">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/08/123123-1.webp" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Técnico em Desenvolvimento de Sistemas</div>
                <p class="text-gray-700 text-base">
                    O curso técnico de Desenvolvimento de Sistemas prepara os estudantes para um...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Técnico em Desenvolvimento de Sistemas
                </button>
            </div>
        </div>
        <!-- Outros cursos aqui -->
        <!-- Curso Técnico em Serviços Jurídicos -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-2">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tingey-injury-law-firm-yCdPU73kGSc-unsplash-scaled.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Técnico em Serviços Jurídicos</div>
                <p class="text-gray-700 text-base">
                    Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Técnico em Serviços Jurídicos
                </button>
            </div>
        </div>
        <!-- Curso Recursos Humanos -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-3">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/campaign-creators-gMsnXqILjp4-unsplash-scaled.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Recursos Humanos</div>
                <p class="text-gray-700 text-base">
                    O estudante vai precisar de conhecimentos de língua portuguesa, matemática e...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Recursos Humanos
                </button>
            </div>
        </div>
        <!-- Mais cursos aqui -->
        <!-- Curso Técnico em Logística -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-4">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Técnico em Logística</div>
                <p class="text-gray-700 text-base">
                    Logística é o planejamento do caminho feito por um produto ou serviço até che...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Técnico em Logística
                </button>
            </div>
        </div>
        <!-- Outros cursos aqui -->
        <!-- Curso Técnico em Contabilidade -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-5">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/charlesdeluvio-OqxPH8c1UFE-unsplash-1-1.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Técnico em Contabilidade</div>
                <p class="text-gray-700 text-base">
                    Matemática e língua portuguesa são disciplinas importantes para entender a co...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Técnico em Contabilidade
                </button>
            </div>
        </div>
        <!-- Mais cursos aqui -->
        <!-- Curso Técnico em Administração -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-6">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/tyler-franta-iusJ25iYu1c-unsplash-scaled.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Técnico em Administração</div>
                <p class="text-gray-700 text-base">
                    Como funcionam as organizações, desde empresas privadas até ONGs, passando po...
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Técnico em Administração
                </button>
            </div>
        </div>
        <!-- Mais cursos aqui -->
        <!-- Curso Novotec Desenvolvimento de Sistemas AMS -->
        <div class="max-w-sm rounded overflow-hidden shadow-lg text-black order-7">
            <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/08/open-p-tech-hero-3.jpg" alt="card-image" />
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Novotec Desenvolvimento de Sistemas AMS</div>
                <p class="text-gray-700 text-base">
                    É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza... 
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" type="button">
                    Acessar o curso Novotec Desenvolvimento de Sistemas AMS
                </button>
            </div>
        </div>
        <!-- Mais cursos aqui -->
    </div>
    <footer>
    @include('layouts.footer')
</footer>
</body>

</html>
