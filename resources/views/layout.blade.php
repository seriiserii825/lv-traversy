<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Worktopia' }}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    @if (request()->is('/'))
        <x-hero />
    @endif
    <main class="container p-4 m-4 mx-auto">
        {{ $slot }}
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
