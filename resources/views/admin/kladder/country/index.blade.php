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
                    </div>
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr style="background-color: #c9d7db;">
                                <th>ID</th>
                                <th>Название</th>
                                <th>Активность</th>
                            </tr>
                            @foreach($countryes as $country)
                                <tr>
                                    <th>{{ $county->id }}</th>
                                    <th>{{ $county->name }}</th>
                                    <th>{{ $county->isActive ? 'Да' : 'Нет' }}</th>
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
    </section>
@endsection