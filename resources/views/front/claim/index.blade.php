@extends('front.layout')
@section('content')
    <div id="content">
        <div class="flex_row_bottom space_between info_list">
            <h4>Список заявок</h4>
            <div class="relative">
                <select class="down-arrow" name="category" id="category">
                    <option value="">Все категории</option>
                    @foreach($categoryes as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="category" class="triangle"></label>
            </div>

        </div>
        <div class="information">
            <div class="info_grid header">
                <p class="info_grid_index">
                    Номер заявки
                </p>
                <p class="info_grid_status">
                    Статус
                </p>
                <p class="info_grid_description">
                    Краткое описание
                </p>
            </div>
            <div class="info_grid flex_column" id="items">
                @foreach($claims as $claim)
                    <form action="like">
                        <input type="hidden" name="request_id" value="{{ $claim->id }}">
                        <p class="info_grid_index">
                            {{ $claim->id }}
                        </p>
                        <p class="info_grid_status">
                            {{ $claim->status }}
                        </p>
                        <div class="info_grid_description flex_row space_between like_group">
                            <p class="basis_auto"> {{ $claim->title }}</p>
                            <input type="button" class="send_btn" value="Поддержать">
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection