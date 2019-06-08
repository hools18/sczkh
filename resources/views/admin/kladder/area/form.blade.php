<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование района</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название района</label>
                <input type="text" class="form-control" name="name_area" id="inputName" value="{{ $area->name ?? '' }}">
                <input type="hidden" name="area_id" value="{{ $area->id ?? '' }}">
            </div>
            <div class="form-group">
                <label>Выберите область</label>
                <select name="region_id" class="form-control" required>
                    @foreach($regions as $region)
                        <option value="{{ $region->id }}" {{ !empty($area->region_id) ? ($area->region_id == $region->id ? 'selected' : '') : '' }}>{{ $region->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Выберите город</label>
                <select name="city_id" class="form-control" required>
                    @foreach($cityes as $city)
                        <option value="{{ $city->id }}" {{ !empty($area->city_id) ? ($area->city_id == $city->id ? 'selected' : '') : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active_area" {{ !empty($area->isActive) ? ($area->isActive ? 'checked' : '') : '' }}> Активировать
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>