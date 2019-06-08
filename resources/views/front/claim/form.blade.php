@extends('front.layout')

@section('content')
    <form class="form-signin" style="max-width: 330px;padding: 15px;margin: 0 auto;">
        <h4 class="form-signin-heading">Опишите вашу проблему</h4>
        <label>Краткое описание</label>
        <input type="text" class="form-control">
        <label>Полное описаниe</label>
        <textarea type="text" class="form-control"></textarea>

        <label>Прикрепить фото</label>
        <input type="file" class="form-control">

        <label>Прикрепить видео</label>
        <input type="file" class="form-control">

        <label>Как Вам удобно получить ответ?</label>
        <div class="input-group">

                <label for="answerEmail">
                <input type="checkbox" id="answerEmail" aria-label="...">Письмом на емайл</label>

        </div>
        <div class="input-group">

                <label for="answerEmail">
                <input type="checkbox" id="answerEmail" aria-label="...">Сообщением СМС на телефон</label>

        </div>
        <div class="input-group">

                <label for="answerEmail">
                <input type="checkbox" id="answerEmail" aria-label="...">В программе на аккаунт</label>

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    </form>

@endsection