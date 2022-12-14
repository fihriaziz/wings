<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    @include('includes.style')
    @stack('css')

    <title>@yield('title')</title>
</head>

<body>
    <main class="py-4">
        @yield('content')
    </main>

    @include('includes.script')

    @stack('script')
</body>

</html>
