
<html>
<head>
    <meta charset="UTF-8">
    <title>アプリ名 - @yield('title')</title>
    @mix('/css/app.css')
</head>
<header>
    @include('common/header')
</header>
<body>

<div class="container">
    @yield('content')
</div>
</body>
<footer>
    @include('common/footer')
</footer>
</html>
