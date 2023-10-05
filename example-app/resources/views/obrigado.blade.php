<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Obrigado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Obrigado, sua receita foi enviada com sucesso.</h1>
        <p class="text-gray-600">Dentro de 10 dias, haverá o retorno do nosso responsável técnico.</p>
        <!-- Atualize o href para redirecionar o usuário de volta à página de categorias -->
        <a href="{{ route('itens.index') }}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg">Voltar para a página de categorias</a>
    </div>
</div>
</body>

</html>
