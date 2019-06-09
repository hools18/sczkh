@extends('front.layout')

@section('content')
    <form action="/api/sendClaim">
        <div class="address">
            <div class="map">
                <div class="down-arrow">Вы здесь?</div>
            </div>
            <div class="map_text">
                <h5>Где находится проблема?</h5>
                <div class="checks">
                    <div>
                        <input type="radio" id="home" name="adress_type" value="home"
                               checked>
                        <label for="home">В здании</label>
                    </div>

                    <div>
                        <input type="radio" id="in_street" name="adress_type" value="street">
                        <label for="in_street">На улице</label>
                    </div>
                </div>
                <h6>Введите недостающие данные</h6>
                <p>Если невозможно точно указать местоположение, как можно подробнее опишите в проблеме, что
                    находится рядом (номера домов, объекты и т.п.)</p>
                <div class="form_info">
                    <div>
                        <label for="city">Город </label>
                            <select name="city" id="city">
                                @foreach( $cityes as #city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>

                    </div>
                    <div>
                        <label for="street">Улица</label>
                        <input id="street" type="text">

                    </div>
                    <div class="more upper_label">

                        <label for="more_info">Что рядом?</label>
                        <input id="more_info" type="text">

                    </div>
                    <div class="home_info">
                        <div>
                            <label for="home_number">Дом</label>
                            <input id="home_number" type="text">

                        </div>
                        <div>
                            <label for="porch">Подъезд</label>
                            <input id="porch" type="text">

                        </div>
                        <div>
                            <label for="floor">Этаж</label>
                            <input id="floor" type="text">

                        </div>
                        <div>
                            <label for="apartment">Квартира</label>
                            <input id="apartment" type="text">

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="problem">
            <h5>Опишите проблему</h5>
            <div class="flex_row space_between">
                <div>
                    <div class="flex_row_bottom space_between">
                        <div class="upper_label">
                            <label for="problem_title">Суть проблемы</label>
                            <input id="problem_title" type="text">
                        </div>
                        <div class="relative">
                            <select class="down-arrow" id="category" type="select">
                                <option value="" selected>Выберите категорию</option>
                                <option value="1">ЖКХ</option>
                                <option value="2">Газовая служба</option>
                            </select>
                            <label for="category"
                                   class="triangle"></label>
                        </div>
                    </div>
                    <div class="upper_label desc">
                        <label for="description">Подробное описание</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="send_group flex_column hor_center space_between">
                    <div>
                        <div class="button_group flex_column hor_center">
                            <p class="title">Прикрепите фото</p>
                            <p class="desc">Список прикреплённых фото</p>
                            <input type="button" value="Выбрать фото">
                        </div>
                        <div class="button_group flex_column hor_center ">
                            <p class="title">Прикрепите видео</p>
                            <p class="desc">Список прикреплённых видео</p>
                            <input type="button" value="Выбрать видео">
                        </div>
                    </div>
                    <input class="send_btn" type="submit" value="Отправить">
                </div>
            </div>
            <div>

            </div>
        </div>
    </form>

@endsection
