@extends('front.layout')

@section('content')
    <form class="form-signin" style="max-width: 330px;padding: 15px;margin: 0 auto;">
        <h4 class="form-signin-heading">Пожалуйста авторизуйтесь</h4>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

@endsection