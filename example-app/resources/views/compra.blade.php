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

<body class="bg-green-100 text-gray-800">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Fazer uma Compra</h1>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('compra.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('user_id') }}">
        </div>

        <div class="mb-4">
            <label for="item_id" class="block text-gray-700 text-sm font-bold mb-2">Item ID:</label>
            <input type="text" name="item_id" id="item_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('item_id') }}">
        </div>

        <div class="mb-4">
            <label for="valor" class="block text-gray-700 text-sm font-bold mb-2">Valor:</label>
            <input type="text" name="valor" id="valor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('valor') }}">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Enviar Compra
        </button>
    </form>
</div>

</body>
</html>
