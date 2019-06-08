<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование роли</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название роли</label>
                <input type="text" class="form-control" name="name_role" id="inputName" value="{{ $area->name ?? '' }}">
                <input type="hidden" name="role_id" value="{{ $area->id ?? '' }}">
            </div>
            <div class="form-group">
                <label for="inputName">Системное название роли</label>
                <input type="text" class="form-control" name="sys_name_role" id="inputName" value="{{ $area->sys_name ?? '' }}">
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