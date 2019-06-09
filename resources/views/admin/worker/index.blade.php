@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Исполняющие организации</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default create_worker">
                            Добавить исполнителя
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Телефон</th>
                                <th>Город</th>
                                <th>Район</th>
                                <th>Активен</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($workers as $worker)
                                <tr data-worker-id="{{ $worker->id }}" class="worker_row">
                                    <td>{{ $worker->id }}</td>
                                    <td>{{ $worker->name }}</td>
                                    <td>{{ $worker->description }}</td>
                                    <td>{{ $worker->phone }}</td>
                                    <td>{{ $worker->getCityName() }}</td>
                                    <td>{{ $worker->getAreaName() }}</td>
                                    <td>{{ $worker->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_worker"><i
                                                        class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_worker"><i
                                                        class="fa fa-trash"></i></button>
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
        <div class="modal fade" id="createWorker">
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
        let modal = $('#createWorker');
        let model_content = $('.modal-content');
        $('.create_worker').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.worker.showForm') }}',
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
        $('.edit_worker').click(function () {
            let worker_id = $(this).closest('tr.worker_row').data('worker-id');
            let data = {
                worker_id: worker_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.worker.edit') }}',
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
        $('.delete_worker').click(function () {
            let area_id = $(this).closest('tr.worker_row').data('worker-id');
            console.log('удаляем - ' + area_id);
        });
    </script>
@endsection