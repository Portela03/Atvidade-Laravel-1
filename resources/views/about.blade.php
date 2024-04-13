<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans">
    @include('layouts.navbar')
    <div class="container mx-auto my-8 p-8 bg-white rounded shadow-md flex flex-wrap justify-center gap-4">

        <a href="#" class="flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal text-center md:text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nossa História</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Implantada no ano de 2008, na Avenida Águia de Haia, localizada na Zona Leste da cidade de São Paulo, a ETEC Zona Leste, atualmente se destaca como um ponto de referência em educação e infraestrutura. Sua história, desde o início, contou com o apoio e o compromisso da comunidade que a permeia. Inicialmente abandonado, o espaço que hoje comporta as respectivas instituições de ensino ETEC e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao receber a informação, logo prontificou-se a ir contra a ideia. Como moradores das redondezas, sentiam a necessidade da implantação de um ambiente voltado à educação, pela valorização do local e, conclusivamente pela possibilidade de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado. Abaixo-assinados percorreram as proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas as duas instituições pertencentes ao Centro Paula Souza. Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, nossa escola oferece uma variedade de cursos técnicos, proporcionando aos alunos uma formação sólida e atualizada.</p>
            </div>
        </a>

        <a href="#" class="flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal text-center md:text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nossa Infraestrutura</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pátio O pátio da instituição é um verdadeiro refúgio. Árvores, flores e plantas dão ao ambiente uma atmosfera de serenidade e frescor. É um espaço que convida os alunos a desfrutarem do ar livre enquanto se dedicam às suas atividades acadêmicas e sociais. O pátio principal também foi projetado para promover a interação e o convívio entre os estudantes. Com mesas distribuídas, o espaço oferece oportunidades para uma variedade de atividades sociais e recreativas, desde jogos de tabuleiro que estimulam o raciocínio e a cooperação, até partidas acirradas de pingue-pongue e pebolim que promovem a competição saudável e o espírito de equipe. Cozinha Salas de Aula Biblioteca Laboratórios Prédio Administrativo Sala Maker Com seu espaço voltado à tecnologia e construção de projetos, a Sala Maker possui notebooks, impressoras 3D, drones, óculos de realidade aumentada e ferramentas para a construção de projetos manuais. Além de ser um ótimo ambiente para estudar com os colegas, o ambiente possui uma diversidade de mesas e cadeiras dispostas, assim comportando um bom número de alunos e seus respectivos projetos. Quadras O espaço oferece duas quadras poliesportivas aos estudantes, sendo uma ao ar livre, para o aproveitamento de dias ensolarados e, outra coberta, garantindo a prática das atividades mesmo em condições climáticas não-favoráveis. Essas instalações são utilizadas de maneira versátil, servindo como cenário nas aulas dinâmicas de Educação Física ou em eventos como gincanas, interclasses, festas juninas, pós-aulas e feiras tecnológicas.</p>
            </div>
        </a>

    </div>
    <footer>
    @include('layouts.footer')
</footer>
</body>

</html>
