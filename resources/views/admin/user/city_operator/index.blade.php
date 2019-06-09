@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Городские операторы</h1>
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
                                <th>Ф.И.О.</th>
                                <th>Роль</th>
                                <th>Специализация</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($users as $user)
                                <tr data-user-id="{{ $user->id }}" class="user_row">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->getRoleName() }}</td>
                                    <td>{{ $user->getCategoryName() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_user"><i class="fa fa-pencil"></i></button>
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
        <div class="modal fade" id="editUser">
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
        let modal = $('#editUser');
        let model_content = $('.modal-content');
        $('.edit_user').click(function () {
            let user_id = $(this).closest('tr.user_row').data('user-id');
            let data = {
                user_id: user_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.user.edit') }}',
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
    </script>
@endsection

