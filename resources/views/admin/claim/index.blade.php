@extends('admin.layout')

@section('content')
    <section class="content-header">
        <h1>Список заявок</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="box-body">
{{--                        @if($articles->isNotEmpty())--}}
                            <table class="table">
                                <tbody>
                                <tr style="background-color: #c9d7db;">
                                    <th>ID</th>
                                    <th>Описание</th>
                                    <th>Автор</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th>Действие</th>
                                </tr>
{{--                                @foreach($articles as $article)--}}
{{--                                    <tr data-article-id="{{ $article->id }}" style="{{ $article->active ? '' : 'background-color:#F8D1BE;' }}" class="article_row">--}}
{{--                                        <td>{{ $article->id }}</td>--}}
{{--                                        <td>{!! $article->title !!}</td>--}}
{{--                                        <td>{{ $article->getUserName() }}</td>--}}
{{--                                        <td>{{ format_date($article->created_at) }}</td>--}}
{{--                                        <td class="article_status">{{ $article->active ? 'Да' : 'Нет' }}</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="btn-group">--}}
{{--                                                <a href="{{ route('front.komov.editNew', $article->id) }}" class="btn btn-default">Редактировать</a>--}}
{{--                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
{{--                                                    <span class="caret"></span>--}}
{{--                                                    <span class="sr-only">Toggle Dropdown</span>--}}
{{--                                                </button>--}}
{{--                                                <ul class="dropdown-menu" role="menu">--}}
{{--                                                    <li><a class="activate-article" data-active-status="{{ $article->active ? 0 : 1 }}">{{ $article->active ? 'Отключить' : 'Включить' }}</a></li>--}}
{{--                                                    <li><a class="delete-section">Удалить</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
                                </tbody>
                            </table>
{{--                            {{ $articles->links() }}--}}
{{--                        @endif--}}
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
