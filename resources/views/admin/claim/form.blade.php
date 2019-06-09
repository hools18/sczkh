<form id="claimForm" action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование заявки</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Заголовок заявки</label>
                <input type="text" class="form-control" name="title" id="inputName" value="{{ $claim->title}}">
                <input type="hidden" name="claim_id" value="{{ $claim->id}}">
            </div>
            <div class="form-group">
                <label for="inputName">Описание заявки</label>
                <input type="text" class="form-control" name="text_claim" id="inputName" value="{{ $claim->text_claim }}">
            </div>
            <div class="form-group">
                <label>Город</label>
                <select name="city_id" class="form-control select_city" required>
                    <option disabled selected>Выберите город</option>
                    @foreach($cityes as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $claim->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Район</label>
                <select name="area_id" class="form-control select_area" required>
                    <option disabled selected>Выберите район</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" {{ $area->id == $claim->area_id ? 'selected' : '' }}>{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select name="category_claim_id" class="form-control select_category" required>
                    <option disabled selected>Выберите категорию</option>
                    @foreach($categoryes as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $claim->category_claim_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Улица</label>
                <input type="text" class="form-control" name="street" value="{{ $claim->street }}">
            </div>
            <div class="form-group">
                <label>Дом</label>
                <input type="text" class="form-control" name="house"  value="{{ $claim->house }}">
            </div>
            <div class="form-group">
                <label>Подъезд</label>
                <input type="text" class="form-control" name="entrance" value="{{ $claim->entrance }}">
            </div>
            <div class="form-group">
                <label>Этаж</label>
                <input type="text" class="form-control" name="floor"  value="{{ $claim->floor }}">
            </div>
            <div class="form-group">
                <label>Квартира</label>
                <input type="text" class="form-control" name="apartment"  value="{{ $claim->apartament }}">
            </div>
            <div class="form-group">
                <label>Описание места события</label>
                <input type="text" class="form-control" name="place_description" value="{{ $claim->place_description }}">
            </div>
            @if($claim->getFirstMedia('claim_image'))
                <div class="form-group">
                    <label for="inputName">Изображение</label>
                    <img src="{{ $claim->getMediaFirstUrl('claim_image') }}">
                </div>
            @endif
            <input type="hidden" name="status" value="Передано в районный центр">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Передать в район</button>
    </div>
</form>
