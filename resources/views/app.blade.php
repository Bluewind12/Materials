<html>
<head>
    <meta charset="UTF-8">
    <title>アプリ名 - @yield('title')</title>
    @mix('/css/app.css')
</head>
<body class="d-flex flex-column min-vh-100">
<header>
    @include('common/header')
</header>
<main class="d-flex" style="flex:1;">
    <div class="d-flex flex-column align-items-center
    py-2 badge-info text-white border-top border-bottom border-white"
        style="width: 100px;">

        <div class="h5">見出し1</div>
        <div>@fa('award')TEST1</div>
        <div>@fa('award')TEST2</div>
        <div>@fa('award')TEST3</div>
        <div class="h5 mt-4">見出し2</div>
        <div>@fa('award')TEST4</div>
        <div>@fa('award')TEST5</div>
        <div>@fa('award')TEST6</div>

    </div>
    <div class="container py-2">
        @yield('content')
    </div>
</main>

<footer>
    @include('common/footer')
</footer>

</body>
</html>
