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
                        <button type="button" class="btn btn-default create_region">
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
                                <th>Действие</th>
                            </tr>
                            @foreach($regions as $region)
                                <tr data-region-id="{{ $region->id }}" class="region_row">
                                    <td>{{ $region->id }}</td>
                                    <td>{{ $region->name }}</td>
                                    <td>{{ $region->getCountryName() }}</td>
                                    <td>{{ $region->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_region"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_region"><i class="fa fa-trash"></i></button>
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
        <div class="modal fade" id="createRegion">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </section>
@endsection
@section('js')
    @parent
    <script>
        let modal = $('#createRegion');
        let model_content = $('.modal-content');
        $('.create_region').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.region.showForm') }}',
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
        $('.edit_region').click(function () {
            let region_id = $(this).closest('tr.region_row').data('region-id');
            let data = {
                region_id: region_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            console.log(data);
            $.ajax({
                    url: '{{ route('admin.region.edit') }}',
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
        $('.delete_region').click(function () {
            let region_id = $(this).closest('tr.region_row').data('region-id');
            console.log('удаляем - ' + region_id);
        });
    </script>
@endsection
