<!DOCTYPE html>
<html lang="">

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

<body class="bg-white text-gray-800">
<div class="mx-auto max-w-2xl p-4 items-center flex flex-col p-5 bg-green-500 rounded mt-4">
    <h1 class="text-3xl font-semibold">{{ $produto->nome }}</h1>

    <!-- Adicione a imagem do produto aqui -->
    <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="mt-4 rounded-lg w-full h-auto" />

    <p class="text-green-100 font-bold mt-2">Preço: ${{ $produto->valor }}</p>

    <p class="text-gray-500 mt-4 max-w-2xl p-2">{{ $produto->descricao }}</p>

    <form action="{{ route('itens.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="item_id" value="{{ $produto->id }}">
        <input type="hidden" name="valor" value="{{ $produto->valor }}">

        <button type="submit" class="bg-green-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            Enviar Receita Medica
        </button>
    </form>
</div>

</body>
</html>
