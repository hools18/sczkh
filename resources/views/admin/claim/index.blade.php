@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список заявок(городской оператор)</h1>
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
                                            <a class="btn btn-default show_claim">Обработать</a>
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
        <div class="modal fade" id="showClaim">
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
        let modal = $('#showClaim');
        let model_content = $('.modal-content');
        $('.show_claim').click(function () {
            let claim_id = $(this).closest('tr.claim_row').data('claim-id');
            let data = {
                claim_id: claim_id,
                '_token': '{{ csrf_token() }}',
                '_method': 'PUT'
            };
            $.ajax({
                    url: '{{ route('admin.claim.showForm') }}',
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
        $(document).on('submit', '#claimForm', function (e) {
            e.preventDefault();
            let form = $('#claimForm');
            let formData = new FormData(form[0]);
            // if(form.find('select[name="city_id]').val().length < 1){
            //     alert('Выберите город');
            //     return false;
            // }
            if(isEmpty($('.select_city').val())){
                alert('Город не указан');
                return false;
            }
            if(isEmpty($('.select_area').val())){
                alert('Район не указан');
                return false;
            }
            if(isEmpty($('.select_category').val())){
                alert('Категория не указана');
                return false;
            }
            $.ajax({
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: 'POST',
                url: form.attr('action')
            }).done(function (response) {
               location.reload();
                e.preventDefault();
            }).fail(function (response) {
                console.log(response);
            });

            e.preventDefault();
        });
    </script>
@endsection
