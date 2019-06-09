<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование области</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название области</label>
                <input type="text" class="form-control" name="name_region" id="inputName" value="{{ $region->name ?? '' }}">
                <input type="hidden" name="region_id" value="{{ $region->id ?? '' }}">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active_region" {{ !empty($region->isActive) ? ($region->isActive ? 'checked' : '') : '' }}> Активировать
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
