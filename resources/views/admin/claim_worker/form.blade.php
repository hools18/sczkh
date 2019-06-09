<form id="claimForm" action="{{ $route }}" method="post">
    {{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Просмотр заявки</h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputName">Заголовок заявки</label>
                <input type="text" class="form-control" name="title" id="inputName" value="{{ $claim->title}}" readonly>
                <input type="hidden" name="claim_id" value="{{ $claim->id}}">
            </div>
            <div class="form-group">
                <label for="inputName">Описание заявки</label>
                <input type="text" class="form-control" name="text_claim" value="{{ $claim->text_claim }}" readonly>
            </div>
            <div class="form-group">
                <label>Город</label>
                <input type="text" class="form-control" name="city_id" value="{{ $claim->getCityName()}}" readonly>
            </div>
            <div class="form-group">
                <label>Район</label>
                <input type="text" class="form-control" name="area_id" value="{{ $claim->getAreaName()}}" readonly>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <input type="text" class="form-control" name="category_claim_id" value="{{ $claim->getCategoryName()}}"
                       readonly>
            </div>
            <div class="form-group">
                <label>Исполнитель</label>
                <input type="text" class="form-control" name="worker_id" value="{{ $claim->getWorkerName()}}" readonly>
            </div>
            <div class="form-group">
                <label>Улица</label>
                <input type="text" class="form-control" name="street" value="{{ $claim->street }}" readonly>
            </div>
            <div class="form-group">
                <label>Дом</label>
                <input type="text" class="form-control" name="house" value="{{ $claim->house }}" readonly>
            </div>
            <div class="form-group">
                <label>Подъезд</label>
                <input type="text" class="form-control" name="entrance" value="{{ $claim->entrance }}" readonly>
            </div>
            <div class="form-group">
                <label>Этаж</label>
                <input type="text" class="form-control" name="floor" value="{{ $claim->floor }}" readonly>
            </div>
            <div class="form-group">
                <label>Квартира</label>
                <input type="text" class="form-control" name="apartment" value="{{ $claim->apartment }}" readonly>
            </div>
            <div class="form-group">
                <label>Описание места события</label>
                <input type="text" class="form-control" name="place_description" value="{{ $claim->place_description }}"
                       readonly>
            </div>
            @if($claim->getFirstMedia('claim_image'))
                <div class="form-group">
                    <label for="inputName">Изображение</label>
                    <img src="{{ $claim->getMediaFirstUrl('claim_image') }}">
                </div>
            @endif
            <input type="hidden" name="status" value="Принято исполнителем">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">отмена</button>
        @if($claim->system_status == 2)
            <button type="submit" class="btn btn-primary">Принять на исполнение</button>
        @endif
    </div>
</form>
