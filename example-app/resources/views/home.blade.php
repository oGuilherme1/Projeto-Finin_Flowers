<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing | Tailwind Starter Kit by Creative Tim</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <button class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                            <a href="{{route('login')}}" class="">Login</a>
                        </button>
                    </li>
                    <li class="flex items-center">
                        <button class="bg-green-300 text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3" type="button" style="transition: all 0.15s ease 0s;">
                            <a href="{{route('register')}}" class="">Registre-se</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center bg-marrom" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover " style='background-image: url("https://img.freepik.com/fotos-gratis/arranjo-de-produtos-de-cannabis-organica-com-espaco-de-copia_23-2148977704.jpg?w=1380&t=st=1694652861~exp=1694653461~hmac=4d64a4434da28b407d306329c4d7c6b60b08705f6bf0805d9e2098c43aeb40eb");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto ">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Bem vindo a <span class="text-green-500">Finin FLowers</span>
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Uma loja especial
                                para pessoas
                                especias
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-marrom fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-marrom -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg ">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Awarded Agency</h6>
                                <p class="mt-2 mb-4 text-gray-600 ">
                                    Bem-vindo à Finin Flowers, líder na produção legal de medicamentos à base de cannabis. Fundada com uma paixão inabalável pela saúde e o bem-estar, nossa empresa está comprometida em proporcionar soluções terapêuticas de alta qualidade, impulsionadas pela inovação e pela ciência, para melhorar a vida das pessoas em todo o mundo.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Revisões Gratuitas</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Mantenha seu usuário envolvido, fornecendo informações significativas.
                                    Lembre-se que a essa altura o usuário está curioso.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Empresa verificada</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Escreva algumas linhas sobre cada um. Um parágrafo que descreve um
                                    recurso será suficiente. Mantenha seu usuário engajado!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal text-green-500">
                            Sobre Nos
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-800">
                            Bem-vindo à Finin Flowers, líder na produção legal de medicamentos à base de cannabis. Fundada com uma paixão inabalável pela saúde e o bem-estar, nossa empresa está comprometida em proporcionar soluções terapêuticas de alta qualidade, impulsionadas pela inovação e pela ciência, para melhorar a vida das pessoas em todo o mundo.
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-800">
                            Nossa missão é tornar a cannabis medicinal acessível e segura para todos que necessitam dela, ao mesmo tempo em que promovemos a educação e a pesquisa contínuas para desmistificar os benefícios terapêuticos dessa planta extraordinária. Acreditamos que a cannabis tem o potencial de transformar a saúde e o bem-estar das pessoas, e estamos comprometidos em desempenhar um papel crucial nessa jornada.
                        </p>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation" class="font-bold text-gray-800 mt-8">Check Tailwind Starter Kit!</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto ">
                        <div class="relative flex flex-col min-w-0 break-words bg-green-500 w-full mb-6 shadow-lg rounded-lg">
                            <img alt="..." src="https://img.freepik.com/fotos-gratis/medico-segurando-a-folha-de-cannabis-e-uma-garrafa-de-oleo-de-cannabis-na-parede-branca_1150-26701.jpg?w=1380&t=st=1694653662~exp=1694654262~hmac=dfa88d18c3b5cd1becf8d4d23c02bfe0baee731d979f6dd721827b7df0b74a1b" />
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-green-500 fill-current"></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Serviços de primeira linha
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    O Oceano Ártico congela todos os invernos e grande parte do
                                    o gelo marinho descongela a cada verão, e esse processo
                                    continue aconteça o que acontecer.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-20 pb-48">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Aqui estão nossos heróis</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                            De acordo com o National Oceanic and Atmospheric
                            Administração, Ted, Scambos, perfumista do NSIDLead, coloca o
                            potencialmente registrar o máximo.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-1-800x800.jpg" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Ryan Tompson</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Web Developer
                                </p>
                                <div class="mt-6">
                                    <button class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-twitter"></i></button><button class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-facebook-f"></i></button><button class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-2-800x800.jpg" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Romina Hadid</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Marketing Specialist
                                </p>
                                <div class="mt-6">
                                    <button class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-google"></i></button><button class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-3-800x800.jpg" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Alexa Smith</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    UI/UX Designer
                                </p>
                                <div class="mt-6">
                                    <button class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-google"></i></button><button class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-twitter"></i></button><button class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                        <div class="px-6">
                            <img alt="..." src="./assets/img/team-4-470x470.png" class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                            <div class="pt-6 text-center">
                                <h5 class="text-xl font-bold">Jenna Kardi</h5>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    Founder and CEO
                                </p>
                                <div class="mt-6">
                                    <button class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-dribbble"></i></button><button class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-google"></i></button><button class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-twitter"></i></button><button class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                                        <i class="fab fa-instagram"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 relative block bg-marrom">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-marrom fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-green-500">Construa algo</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Coloque o potencial recorde de extensão máxima de gelo marinho neste ano
                            até o gelo baixo. De acordo com o National Oceanic e
                            Administração Atmosférica, Ted, Scambos.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-medal text-xl"></i>
                        </div>
                        <h6 class="text-xl mt-5 font-semibold text-green-500">
                            Excelentes serviços
                        </h6>
                        <p class="mt-2 mb-4 text-gray-500">
                            Algum texto de exemplo rápido para desenvolver o título do cartão e compor
                            a maior parte do conteúdo do cartão.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-poll text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-green-500">
                            Aumente seu mercado
                        </h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Algum texto de exemplo rápido para desenvolver o título do cartão e compor
                            a maior parte do conteúdo do cartão.
                        </p>
                    </div>
                    <div class="w-full lg:w-3/12 px-4 text-center">
                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                            <i class="fas fa-lightbulb text-xl"></i>
                        </div>
                        <h5 class="text-xl mt-5 font-semibold text-green-500">Hora do almoço</h5>
                        <p class="mt-2 mb-4 text-gray-500">
                            Algum texto de exemplo rápido para desenvolver o título do cartão e compor
                            a maior parte do conteúdo do cartão.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-marrom">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">Quer trabalhar conosco?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                    Preencha este formulário e entraremos em contato com você em 24 horas.
                                </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Nome Completo</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label><input type="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Mensagem</label><textarea rows="4" cols="80" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Type a message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button class="bg-green-500 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all 0.15s ease 0s;">
                                        Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-white pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Vamos manter contato!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Encontre-nos em qualquer uma dessas plataformas, respondemos em 1 a 2 dias úteis.
                    </h5>
                    <div class="mt-6">
                        <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                            <i class="flex fab fa-twitter"></i></button><button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                            <i class="flex fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                            <i class="flex fab fa-dribbble"></i></button><button class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Links Úteis</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation">Sobre Nós</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free">Produtos Gratuitos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Outros recursos</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">Licença MIT</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms">Termos e Condições Condições</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy">Política de Privacidade</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us">Contate-nos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2019 Tailwind Starter Kit by
                        <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Tim criativo</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    marrom: '#FFF5E1',
                }
            }
        }
    }
</script>

</html>