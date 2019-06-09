@extends('front.layout')

@section('content')
    <div id="content">
        <form action="/api/sendClaimJson" id="claim_form" token="{{ csrf_token()}}">
            <div class="address">
                <div class="map">
                    <div class="down-arrow">Вы здесь?</div>
                </div>
                <div class="map_text">
                    <h5>Где находится проблема?</h5>
                    <div class="checks">
                        <div>
                            <input type="radio" id="home" name="adress_type" value="home"
                                   checked onchange="homeClicked()">
                            <label for="home">В здании</label>
                        </div>
                        <div>
                            <input type="radio" id="in_street" name="adress_type" value="street"
                                   onchange="streetClicked()">
                            <label for="in_street">На улице</label>
                        </div>
                    </div>
                    <h6>Введите недостающие данные</h6>
                    <p>Если невозможно точно указать местоположение, как можно подробнее опишите в проблеме, что
                        находится рядом (номера домов, объекты и т.п.)</p>
                    <div class="form_info">
                        <div>
                            <label for="city">Город </label>
                            <select name="city_id" id="city">
                                @foreach( $cityes as $city)
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
                            <input id="more_info" name="place_description" type="text">

                        </div>
                        <div class="home_info">
                            <div>
                                <label for="home_number">Дом</label>
                                <input id="home_number" name="house" type="text">

                            </div>
                            <div>
                                <label for="porch">Подъезд</label>
                                <input id="porch" name="entrance" type="text">

                            </div>
                            <div>
                                <label for="floor">Этаж</label>
                                <input id="floor" name="floor" type="text">

                            </div>
                            <div>
                                <label for="apartment">Квартира</label>
                                <input id="apartment" name="apartment" type="text">
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
                                <input id="problem_title" name="title" type="text">
                            </div>
                            <div class="relative">
                                <select class="down-arrow" name="category_claim_id" id="category" type="select">
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
                            <textarea name="description" name="claim_text" id="description" cols="30"
                                      rows="10"></textarea>
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
                        <input class="send_btn" type="button" value="Отправить" onclick="sendClaim()">
                    </div>
                </div>
                <div>

                </div>
            </div>
        </form>
        <div class="popup flex_row hor_center vert_center"  id="result_popup">
            <div class="confirm_request flex_column hor_center">
                <div class="close">
                    <a href=""><img src="../images/delete-button.png" alt="close">
                    </a>
                </div>
                <h4>Спасибо!</h4>
                <h5>Заявка № <span id="result_id">98090-8к</span></h5>
                <p>успешно отправлена на рассмотрение</p>
                <form action="/api/updateJson" class="flex_column hor_center feedbaks feedback_variants" id="confirm_feedback"  token="{{ csrf_token()}}">
                    <p>Куда отправить ответ?</p>
                    <div class="feedback_type flex_row space_between feedbaks">
                        <div>
                            <input id="email" type="checkbox" name="isEmail">
                            <label for="email">Письмо на e-mail</label>
                        </div>
                        <input type="text" name="email">
                    </div>
                    <div class="feedback_type flex_row space_between feedbaks">
                        <div>
                            <input id="sms" type="checkbox" name="isSms">
                            <label for="sms">СМС на телефон</label>
                        </div>
                        <input type="text" name="sms">
                    </div>
                    <input type="button" class="send_btn" value="Подтвердить" onclick="sendConfirmCallback()">
                </form>
                <div class="flex_column hor_center new_request">
                    <p>Хотите оставить заявку ещё?</p>
                    <input type="button" class="register_button" value="Зарегистрироваться">
                    <input type="button" class="non_login_button" value="Новая быстрая заявка">
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script src="/js/main.js"></script>
@endsection
