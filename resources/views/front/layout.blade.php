<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cистема заявок ЖКХ</title>
    <link rel="stylesheet" href="/build/bundle.css?ver={{ time() }}">
</head>
<body>
<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="{{ active('front.main.index') }}"><a href="{{ route('front.main.index') }}">Главная</a></li>
                <li role="presentation" class="{{ active('auth.login') }}"><a href="{{ route('auth.login') }}">Вход</a></li>
                <li role="presentation" class="{{ active('auth.register') }}"><a href="{{ route('auth.register') }}">Регистрация</a></li>
                <li role="presentation" class="{{ active('front.claim.index') }}"><a href="{{ route('front.claim.index') }}">Мои заявки</a></li>
            </ul>
        </nav>
        <a href="{{ route('front.main.index') }}">
            <h3 class="text-muted">Cистема заявок ЖКХ</h3>
        </a>
    </div>
    @yield('content')
    <footer class="footer">
    </footer>
</div>
<script src="/build/bundle.js"></script>
</body>
</html>