<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | ScholarShop</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-slate-100 w-full h-screen flex flex-col gap-4 justify-center items-center px-6">
        @yield('container')
    </div>
</body>
</html>