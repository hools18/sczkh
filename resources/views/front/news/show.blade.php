@extends('front.layout')

@section('content')
    <div id="content">
        <div class="info_list">
            <h4>Информация</h4>
        </div>
        <div class="news_item_content">
            <h5>Плановые работы по ремонту газового оборудования с 17 по 18 июля</h5>
            <div class="news_info flex_row space_between ">
                <div class="news_item_image flex_row space_between">
                    <img src="../images/fire.png" alt="fire_alarm!!!!!!!">
                </div>
                <p class="news_item_content">
                    В связи с проведением плановых ремонтных работ будет прекращена подача газа с 09.00
                    часов 17 июля 2019 года до 09.00 часов 18 июля 2019 года. В связи с проведением плановых
                    ремонтных работ будет прекращена подача газа с 09.00 часов 17 июля 2019 года до 09.00
                    часов 18 июля 2019 года. Читать далее
                </p>
            </div>
            <div class="news_footer flex_column">
                <p>Автор: Администрация Центрального района </p>
                <p class="news_date">Дата: 08.06.2019</p>
            </div>
        </div>
    </div>
@endsection