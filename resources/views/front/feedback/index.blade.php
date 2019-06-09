@extends('front.layout')

@section('content')
    <div id="content">
        <div class="flex_row_bottom space_between info_list">
            <h4>Информация</h4>
            <div class="relative">
                <select class="down-arrow" name="category" id="area_id">
                    <option value="">Выбрать район</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                    @endforeach
                </select>
                <label for="area_id"
                       class="triangle"></label>
            </div>

        </div>
        <div class="feedback_content">
            <hr>
            <div class="flex_column">
                <div class="feedback_item flex_row space_between ">
                    <div class="feedback_image flex_row space_between">
                        <img src="../images/login.png" alt="pupkin_alarm!!!!!!!">
                    </div>
                    <div class="flex_column">
                        <div class="feedback_header flex_row">
                            <p>Вася Пупкин</p>
                            <p>Дата: 21.06.2019</p>
                            <p>Оценка: 4</p>
                        </div>
                        <p class="feedback_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>
                <div class="feedback_item flex_row space_between ">
                    <div class="feedback_image flex_row space_between">
                        <img src="../images/login.png" alt="pupkin_alarm!!!!!!!">
                    </div>
                    <div class="flex_column">
                        <div class="feedback_header flex_row">
                            <p>Вася Пупкин</p>
                            <p>Дата: 21.06.2019</p>
                            <p>Оценка: 4</p>
                        </div>
                        <p class="feedback_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>

                <div class="feedback_send_content">
                    <form action="" class="flex_column">
                        <div class="rating flex_row_bottom">
                            <label> Оценка:
                                <select name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                </select>
                            </label>
                        </div>
                        <div class="feedback_body flex_row_bottom space_between">
                            <div class="body">
                                <textarea name="text" id="" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" class="send_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection