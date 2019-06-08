@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список ролей</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default create_role">
                            Добавить роль
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Системное название</th>
                                <th>Активна</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($roles as $role)
                                <tr data-role-id="{{ $role->id }}" class="role_row">
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->sys_name }}</td>
                                    <td>{{ $role->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_role"><i class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_role"><i class="fa fa-trash"></i></button>
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
        <div class="modal fade" id="createRole">
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
        let modal = $('#createRole');
        let model_content = $('.modal-content');
        $('.create_role').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.role.showForm') }}',
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
        $('.edit_role').click(function () {
            let role_id = $(this).closest('tr.role_row').data('role-id');
            let data = {
                role_id: role_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.role.edit') }}',
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
        $('.delete_role').click(function () {
            let area_id = $(this).closest('tr.area_row').data('area-id');
            console.log('удаляем - ' + area_id);
        });
    </script>
@endsection