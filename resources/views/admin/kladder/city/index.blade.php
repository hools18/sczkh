@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список городов</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default create_city">
                            Добавить город
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Область</th>
                                <th>Активность</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($cityes as $city)
                                <tr data-city-id="{{ $city->id }}" class="city_row">
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->getRegionName() }}</td>
                                    <td>{{ $city->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_city"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_city"><i class="fa fa-trash"></i></button>
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
        <div class="modal fade" id="createCity">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    @parent
    <script>
        let modal = $('#createCity');
        let model_content = $('.modal-content');
        $('.create_city').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.city.showForm') }}',
                    type: "POST",
                    data: data,
                    dataType: "json"
                }
            ).done(function (response) {
                model_content.empty();
                model_content.append(response['form']);
                modal.modal('show');
            }).fail(function (response) {
                console.log(response);
            });
        });
        $('.edit_city').click(function () {
            let city_id = $(this).closest('tr.city_row').data('city-id');
            let data = {
                city_id: city_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.city.edit') }}',
                    type: "POST",
                    data: data,
                    dataType: "json"
                }
            ).done(function (response) {
                model_content.empty();
                model_content.append(response['form']);
                modal.modal('show');
            }).fail(function (response) {
                console.log(response);
            });
        });
        $('.delete_city').click(function () {
            let area_id = $(this).closest('tr.city_row').data('city-id');
            console.log('удаляем - ' + area_id);
        });
    </script>
@endsection
