<form action="{{ $route }}" method="post">
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
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->title}}">
                <input type="hidden" name="role_id" value="{{ $claim->id}}">
            </div>
            <div class="form-group">
                <label for="inputName">Описание заявки</label>
                <input type="text" class="form-control" name="sys_name_role" id="inputName" value="{{ $claim->text_claim }}">
            </div>
            <div class="form-group">
                <label>Город</label>
                <select name="region_id" class="form-control" required>
                    <option disabled selected>Выберите город</option>
                    @foreach($cityes as $city)
                        <option value="{{ $city->id }}" {{ $city->id == $claim->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Район</label>
                <select name="region_id" class="form-control" required>
                    <option disabled selected>Выберите район</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" {{ $area->id == $claim->area_id ? 'selected' : '' }}>{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select name="region_id" class="form-control" required>
                    <option disabled selected>Выберите категорию</option>
                    @foreach($categoryes as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $claim->category_claim_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputName">Улица</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->street }}">
            </div>
            <div class="form-group">
                <label for="inputName">Дом</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->house }}">
            </div>
            <div class="form-group">
                <label for="inputName">Подъезд</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->entrance }}">
            </div>
            <div class="form-group">
                <label for="inputName">Этаж</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->floor }}">
            </div>
            <div class="form-group">
                <label for="inputName">Квартира</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->apartament }}">
            </div>
            <div class="form-group">
                <label for="inputName">Описание места события</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $claim->place_description }}">
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
