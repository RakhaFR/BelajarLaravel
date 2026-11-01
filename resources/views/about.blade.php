<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-between align-center w-xl">
        <a href="/" class="text-blue-500 underline text-3xl">home</a>
        <a href="/blog" class="text-blue-500 underline text-3xl">blog</a>
        <a href="/contact" class="text-blue-500 underline text-3xl">contact</a>
    </div>
    <h1 class="text-3xl font-bold text-red-500">Ini adalah Halaman About</h1>
    <h3>Owner {{ $nama }}</h3>
</body>
</html>
