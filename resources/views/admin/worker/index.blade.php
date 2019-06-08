@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список исполнителей</h1>
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
                                <th>Ф.И.О</th>
                                <th>Специализация</th>
                                <th>Действие</th>
                            </tr>
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
    </section>
@endsection