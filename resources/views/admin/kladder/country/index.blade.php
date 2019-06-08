@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список стран</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#createCountry">
                            Добавить страну
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Активность</th>
                            </tr>
                            @foreach($countryes as $country)
                                <tr>
                                    <th>{{ $country->id }}</th>
                                    <th>{{ $country->name }}</th>
                                    <th>{{ $country->isActive ? 'Да' : 'Нет' }}</th>
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
        <div class="modal fade" id="createCountry">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.country.create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Добавить страну</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName">Название страны</label>
                                    <input type="text" class="form-control" name="name_country" id="inputName">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="active_country"> Активировать
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection