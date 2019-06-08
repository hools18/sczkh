@extends('front.layout')

@section('content')
        <div class="jumbotron">
            <h1>Система заявок ЖКХ</h1>
            <p class="lead">У Вас что-то произошло и Вы не знаете куда обратится? Тогда вы точно зашли по адресу</p>
            <p><a class="btn btn-lg btn-success" href="{{ route('front.claim.form') }}" role="button">Оставить заявку</a></p>
        </div>
@endsection