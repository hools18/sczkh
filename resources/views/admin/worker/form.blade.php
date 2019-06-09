<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование исполнителя</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название</label>
                <input type="text" class="form-control" name="name_worker" id="inputName" value="{{ $worker->name ?? '' }}">
                <input type="hidden" name="worker_id" value="{{ $worker->id ?? '' }}">
            </div>
            <div class="form-group">
                <label for="inputDesc">Описание</label>
                <textarea class="form-control" name="desc_worker" id="inputDesc">{{ $worker->description ?? '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="inputPhone">Номер телефона</label>
                <input type="text" class="form-control" name="phone_worker" id="inputPhone" value="{{ $worker->phone ?? '' }}">
            </div>
            <div class="form-group">
                <label>Выберите город</label>
                <select name="city_id" class="form-control" required>
                    @foreach($cityes as $city)
                        <option value="{{ $city->id }}" {{ !empty($worker->city_id) ? ($worker->city_id == $city->id ? 'selected' : '') : '' }}>{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Выберите район</label>
                <select name="area_id" class="form-control" required>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" {{ !empty($worker->area_id) ? ($worker->area_id == $area->id ? 'selected' : '') : '' }}>{{ $area->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active_worker" {{ !empty($worker->isActive) ? ($worker->isActive ? 'checked' : '') : '' }}> Активировать
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>