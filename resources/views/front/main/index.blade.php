@extends('front.layout')

@section('content')
    <div id="request">
        <div class="col-md-6 non-login">
            <div><p>Хотите оставить быструю заявку?</p>
                <a href="create">Создать</a></div>

        </div>
        <div class="col-md-6">
            <div class="autorize">
                <h3>Авторизация</h3>
                <form action="post">
                    <div>
                        <input placeholder="Логин" type="text" name="login">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <input placeholder="Пароль" type="text" name="password">
                        <i class="fas fa-key"></i>
                    </div>

                    <input class="login_button" type="submit" value="Войти">
                </form>
                <p>У вас нет аккаунта?</p>
                <a href="register">Зарегистрироваться</a>
            </div>
        </div>
    </div>
@endsection
