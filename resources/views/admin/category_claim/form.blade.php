<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование категории</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Название категории</label>
                <input type="text" class="form-control" name="name_category" id="inputName" value="{{ $category->name }}">
                <input type="hidden" name="category_id" value="{{ $category->id }}">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active_category" {{ $category->isActive ? 'checked' : '' }}> Активировать
                </label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>