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
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#createRegion">
                            Добавить область
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Страна</th>
                                <th>Активность</th>
                            </tr>
                            @foreach($regions as $region)
                                <tr>
                                    <th>{{ $region->id }}</th>
                                    <th>{{ $region->name }}</th>
                                    <th>{{ $region->getCountryName() }}</th>
                                    <th>{{ $region->isActive ? 'Да' : 'Нет' }}</th>
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
        <div class="modal fade" id="createRegion">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.region.create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Добавить область</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName">Название области</label>
                                    <input type="text" class="form-control" name="name_region" id="inputName">
                                </div>
                                <div class="form-group">
                                    <label>Выберите страну</label>
                                    <select name="region_id" class="form-control" required>
                                        @foreach($countryes as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="active_region"> Активировать
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
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </section>
@endsection