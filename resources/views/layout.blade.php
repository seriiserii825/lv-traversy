<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Worktopia')</title>
</head>
<body class="bg-gray-100">
    <x-header />
    <main class="container p-4 m-4 mx-auto">
        @yield('content')
    </main>
</body>
</html>
