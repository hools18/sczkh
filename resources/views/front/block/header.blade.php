<section class="bg">
</section>
<header class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="logo">
                <a href="/">
                    <div class="logo_text">
                        <p class="logo_text_name">СЗЖКХ <br><span>Сообщите нам о проблеме</span></p>
                    </div>
                    <div class="logo-img"><img src="../images/logo.png" alt="logo"></div>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <nav>
                <a href="{{ route('front.main.index') }}">Главная</a>
                <a href="{{ route('front.news.index') }}">Информация</a>
                <a href="{{ route('front.claim.index') }}">Список заявок</a>
                <a href="{{ route('front.feedback.index') }}">Отзывы</a>
                <a href="#">Личный кабинет</a>
                {{--<a href="#">Поддержка</a>--}}
            </nav>
        </div>
    </div>
</header>