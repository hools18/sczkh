<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/084c4d79e8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Ubuntu&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <link rel="manifest" href="/manifest.json">
    <title>{{ $header ?? '' }}</title>
</head>
<body>
@include('front.block.header')
<section class="container">
    @yield('content')
</section>
@section('js')
    {{--<script>--}}
        {{--if ('serviceWorker' in navigator) {--}}
            {{--// Регистрация service worker-а, расположенного в корне сайта--}}
            {{--// за счет использования дефолтного scope (не указывая его)--}}
            {{--navigator.serviceWorker.register('/sw.js').then(function (registration) {--}}
                {{--console.log('Service worker зарегистрирован:', registration);--}}
            {{--}).catch(function (error) {--}}
                {{--console.log('Ошибка при регистрации service worker-а:', error);--}}
            {{--});--}}
        {{--} else {--}}
            {{--// Текущий браузер не поддерживает service worker-ы.--}}
            {{--console.log('Текущий браузер не поддерживает service worker-ы');--}}
        {{--}--}}

    {{--</script>--}}
@show
</body>
</html>