<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование города</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название города</label>
                <input type="text" class="form-control" name="name_city" id="inputName" value="{{ $city->name ?? '' }}">
                <input type="hidden" name="city_id" value="{{ $city->id ?? '' }}">
            </div>
            <div class="form-group">
                <label>Выберите область</label>
                <select name="region_id" class="form-control" required>
                    @foreach($regions as $region)
                        <option value="{{ $region->id }}" {{ !empty($city->region_id) ? ($city->region_id == $region->id ? 'selected' : '') : '' }}>{{ $region->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active_city" {{ !empty($city->isActive) ? ($city->isActive ? 'checked' : '') : '' }}> Активировать
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
