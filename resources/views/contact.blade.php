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
        <a href="/about" class="text-blue-500 underline text-3xl">about</a>
        <a href="/blog" class="text-blue-500 underline text-3xl">blog</a>
    </div>
    <h1 class="text-4xl text-black">Ini adalah halaman kontak</h1>
    <div class="mt-5">
        <ul class="flex gap-3 align-center flex-col">
            <li> <a href="instagram.com" class="text-blue-500 underline text-2xl">Instagram</a></li>
            <li> <a href="youtube.com" class="text-blue-500 underline text-2xl">Youtube</a></li>
            <li> <a href="tiktok.com" class="text-blue-500 underline text-2xl">Tiktok</a></li>
        </ul>
    </div>
</body>

</html>
