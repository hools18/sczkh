@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список заявок</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="box-body">

                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Город</th>
                                <th>Район</th>
                                <th>Категория</th>
                                <th>Заголовок</th>
                                <th>Описание</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Дата исполнения</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($claims as $claim)
                                <tr data-claim-id="{{ $claim->id }}" class="claim_row">
                                    <td>{{ $claim->id }}</td>
                                    <td>{{ $claim->getCityName() }}</td>
                                    <td>{{ $claim->getAreaName() }}</td>
                                    <td>{{ $claim->getCategoryName()}}</td>

                                    <td>{{ $claim->title  }}</td>
                                    <td>{{ $claim->text_claim }}</td>
                                    <td>{{ $claim->status }}</td>

                                    <td>{{ $claim->created_at  }}</td>
                                    <td>{{ $claim->date_expired }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-default">Обработать</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-tooltip">
        </div>

    </section>
@endsection
