@extends('front.layout')

@section('content')
    <form class="form-signin" style="max-width: 330px;padding: 15px;margin: 0 auto;">
        <h4 class="form-signin-heading">Введите данные для регистации</h4>
        <label for="inputEmail">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="" required>
        <label for="inputName">Никнейм</label>
        <input type="text" id="inputName" class="form-control" placeholder="" required>
        <label for="inputPhone">Номер телефона</label>
        <input type="text" id="inputPhone" class="form-control" placeholder="" required>
        <label for="inputPassword">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистироваться</button>
    </form>

@endsection