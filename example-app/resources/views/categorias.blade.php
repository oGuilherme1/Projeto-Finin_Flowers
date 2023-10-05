<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#00FF00"/> <!-- Define a cor verde -->
    <link rel="shortcut icon" href="./assets/img/favicon.ico"/>
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing | Tailwind Starter Kit by Creative Tim</title>
</head>

<body class="bg-gray-300 text-gray-800 antialiased"> <!-- Define o plano de fundo verde -->
<x-navigation></x-navigation>
<main class="flex flex-col gap-4 justify-center items-center p-4"> <!-- Adiciona espaçamento entre os elementos -->
    <h1 class="text-3xl font-semibold text-green-900">Oleos</h1>

    <div class="flex flex-wrap gap-4"> <!-- Use uma grade para os cards -->
        @foreach($oleos as $oleo)
            <div style="width: 400px;" class="bg-white border border-gray-200 rounded-lg shadow p-4 dark:bg-green-500 dark:border-green-200">
                <a href="#">
                    <h5 class="text-2xl font-bold text-green-900 dark:text-white">{{$oleo->nome}}</h5>
                </a>
                <img src="{{ $oleo->imagem }}" alt="{{ $oleo->nome }}" class="mt-4 rounded-lg w-full h-auto" />
                <a href="{{ route('itens.show', $oleo->id) }}" class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver Detalhes
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>

    <h1 class="text-3xl font-semibold text-green-900">Remedios</h1>

    <div class="flex flex-wrap gap-4"> <!-- Use uma grade para os cards -->
        @foreach($remedios as $remedio)
            <div style="width: 400px;" class="bg-white border border-gray-200 rounded-lg shadow p-4 dark:bg-green-500 dark:border-green-200">
                <a href="#">
                    <h5 class="text-2xl font-bold text-green-900 dark:text-white">{{$remedio->nome}}</h5>
                </a>
                <img src="{{ $remedio->imagem }}" alt="{{ $remedio->nome }}" class="mt-4 rounded-lg w-full h-auto" />
                <a href="{{ route('itens.show', $remedio->id) }}" class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver Detalhes
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>


    <h1 class="text-3xl font-semibold text-green-900">Cremes</h1>

    <div class="flex flex-wrap gap-4"> <!-- Use uma grade para os cards -->
        @foreach($cremes as $creme)
            <div style="width: 400px;" class="bg-white border border-gray-200 rounded-lg shadow p-4 dark:bg-green-500 dark:border-green-200">
                <a href="#">
                    <h5 class="text-2xl font-bold text-green-900 dark:text-white">{{$creme->nome}}</h5>
                </a>
                <img src="{{ $creme->imagem }}" alt="{{ $creme->nome }}" class="mt-4 rounded-lg w-full h-auto" />
                <a href="{{ route('itens.show', $creme->id) }}" class="mt-10 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver Detalhes
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>



    <!-- Repita o mesmo padrão para os outros tipos de produtos (Remedios, Comestiveis, Cremes) -->
</main>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

</body>
</html>
