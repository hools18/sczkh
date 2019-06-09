@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список категорий</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" class="btn btn-default create_category">
                            Добавить категорию
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Активность</th>
                                <th>Действие</th>
                            </tr>
                            @foreach($categoryes   as $category)
                                <tr data-category-id="{{ $category->id }}" class="category_row">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->isActive ? 'Да' : 'Нет' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default edit_category"><i
                                                        class="fa fa-pencil"></i></button>
                                            <button type="button" class="btn btn-default delete_category"><i
                                                        class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-tooltip">
        </div>
        <div class="modal fade" id="createCategory">
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
        let modal = $('#createCategory');
        let model_content = $('.modal-content');
        $('.create_category').click(function () {
            let data = {
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.category.showForm') }}',
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
        $('.edit_category').click(function () {
            let category_id = $(this).closest('tr.category_row').data('category-id');
            let data = {
                category_id: category_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            console.log(data);
            $.ajax({
                    url: '{{ route('admin.category.edit') }}',
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
        $('.delete_category').click(function () {
            let category_row = $(this).closest('tr.category_row');
            let category_id = category_row.data('category-id');
            let data = {
                category_id: category_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'DELETE'
            };
            var r = confirm("Вы точно хотите удалить категорию\n");
            if (r === true) {

                $.ajax({
                        url: '{{ route('admin.category.delete') }}',
                        type: "POST",
                        data: data,
                        dataType: "json"
                    }
                ).done(function (response) {
                    category_row.remove();
                }).fail(function (response) {
                    console.log(response);
                });
            }
        });
    </script>
@endsection
