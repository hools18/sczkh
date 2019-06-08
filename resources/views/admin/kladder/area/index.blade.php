@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список районов</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default create_area">
                            Добавить район
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Область</th>
                                <th>Город</th>
                                <th>Активность</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($areas as $area)
                                <tr data-area-id="{{ $area->id }}" class="area_row">
                                    <td>{{ $area->id }}</td>
                                    <td>{{ $area->name }}</td>
                                    <td>{{ $area->getRegionName() }}</td>
                                    <td>{{ $area->getCityName() }}</td>
                                    <td>{{ $area->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_area"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_area"><i class="fa fa-trash"></i></button>
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
        <div class="modal fade" id="createArea">
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
        let modal = $('#createArea');
        let model_content = $('.modal-content');
        $('.create_area').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.area.showForm') }}',
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
        $('.edit_area').click(function () {
            let area_id = $(this).closest('tr.area_row').data('area-id');
            let data = {
                area_id: area_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.area.edit') }}',
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
        $('.delete_area').click(function () {
            let area_id = $(this).closest('tr.area_row').data('area-id');
            console.log('удаляем - ' + area_id);
        });
    </script>
@endsection