<form action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Редактирование пользователя</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Имя</label>
                <input type="text" class="form-control" name="name_user" id="inputName" value="{{ $user->name }}">
                <input type="hidden" name="user_id" value="{{ $user->id}}">
            </div>
            <div class="form-group">
                <label>Роль</label>
                <select name="role_id" class="form-control" required>
                    <option disabled selected>Выберите роль</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Специализация</label>
                <select name="category_claim_id" class="form-control" required>
                    <option disabled selected>Выберите специализацию</option>
                    @foreach($categoryes as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $user->category_claim_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
