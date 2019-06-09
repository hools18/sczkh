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
        <div class="news_content">
            <h5>Новости Центрального района</h5>
            <div class="flex_column">
                <div class="news_item flex_row space_between ">
                    <div class="news_image flex_row space_between">
                        <a href="{{ route('front.news.show') }}"><img src="../images/fire.png" alt="fire_alarm!!!!!!!"></a>

                    </div>
                    <div class="news flex_column">
                        <div class="news_header flex_row space_between">
                            <a href="{{ route('front.news.show') }}"><p>Плановые работы по ремонту газового оборудования с 17 по 18 июля</p></a>
                            <p class="news_date">Дата: 08.06.2019</p>
                        </div>
                        <p class="news_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>
                <div class="news_item flex_row space_between ">
                    <div class="news_image flex_row space_between">
                        <a href="{{ route('front.news.show') }}"><img src="../images/fire.png" alt="fire_alarm!!!!!!!"></a>

                    </div>
                    <div class="news flex_column">
                        <div class="news_header flex_row space_between">
                            <a href="{{ route('front.news.show') }}"><p>Плановые работы по ремонту газового оборудования с 17 по 18 июля</p></a>
                            <p class="news_date">Дата: 08.06.2019</p>
                        </div>
                        <p class="news_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>
                <div class="news_item flex_row space_between ">
                    <div class="news_image flex_row space_between">
                        <a href="{{ route('front.news.show') }}"> <img src="../images/energy.png" alt="fire_alarm!!!!!!!"></a>
                    </div>
                    <div class="news flex_column">
                        <div class="news_header flex_row space_between">
                            <a href="{{ route('front.news.show') }}"><p>Плановые работы по ремонту газового оборудования с 17 по 18 июля</p></a>
                            <p class="news_date">Дата: 08.06.2019</p>
                        </div>
                        <p class="news_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>
                <div class="news_item flex_row space_between ">
                    <div class="news_image flex_row space_between">
                        <a href="{{ route('front.news.show') }}"><img src="../images/water.png" alt="fire_alarm!!!!!!!"></a>
                    </div>
                    <div class="news flex_column">
                        <div class="news_header flex_row space_between">
                            <a href="{{ route('front.news.show') }}"><p>Плановые работы по ремонту газового оборудования с 17 по 18 июля</p></a>
                            <p class="news_date">Дата: 08.06.2019</p>
                        </div>
                        <p class="news_content">
                            В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                            часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                            ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                            часов 18 июля 2019 года. Читать далее
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection