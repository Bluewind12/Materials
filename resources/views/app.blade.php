<html>
<head>
    <meta charset="UTF-8">
    <title>素材ツール - @yield('title')</title>
    @mix('/css/app.css')
</head>
<body class="d-flex flex-column min-vh-100">
<header>
    @include('common/header')
</header>
<main class="d-flex" style="flex:1;">
    @include('common/side_bar')
    <div class="p-4 w-100">
        @yield('content')
    </div>
</main>

<footer>
    @include('common/footer')
</footer>

</body>
</html>
