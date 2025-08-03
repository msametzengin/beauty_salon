<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-gray-800">

    <script src="//unpkg.com/alpinejs" defer></script>


    @include('components.layouts.header')

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    @include('components.layouts.footer')

    @livewireScripts
</body>
</html>