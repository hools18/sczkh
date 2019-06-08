@extends('front.layout')

@section('content')
    <table class="table table-hover">
        <tr>
            <th>Номер</th>
            <th>Описание</th>
            <th>Дата</th>
            <th>Статус</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Нет горячей воды</td>
            <td>2018-04-09 10:25</td>
            <td>Отправлена</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Прорыв канализации</td>
            <td>2018-08-09 15:25</td>
            <td>Принято в работу</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Упало дерево</td>
            <td>2018-06-09 12:25</td>
            <td>Обрабатывается</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Обрыв оптико-волоконного кабеля</td>
            <td>2018-01-01 01:25</td>
            <td>Успешно завершено</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Запах газа в подъезде</td>
            <td>2018-01-09 23:25</td>
            <td>Отклонена</td>
        </tr>
    </table>
@endsection