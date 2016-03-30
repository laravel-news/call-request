<div class="_call_request_form">

    @if ($call)
        <div class="alert alert-success">Спасибо! Мы с Вами свяжемся  в ближайшее время</div>
    @else

    <form action="{{route('call_request_form')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="call_request_name">Ваше имя *</label>
            <input type="text" class="form-control" id="call_request_name" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="form-group">
            <label for="call_request_phone">Телефон *</label>
            <input type="text" class="form-control" id="call_request_phone" name="phone" placeholder="Ваш телефон" required>
        </div>

        <div class="form-group">
            <label for="call_request_time">Удобное время  для звонка </label>
            <select class="form-control" name="time" id="call_request_time">
                <option value="">-- Без разницы</option>
                <option value="Первая половина дня">Первая половина дня</option>
                <option value="Вторая половина дня">Вторая половина дня</option>
            </select>
        </div>

        <div class="form-group">
            <label for="call_request_message">Сообщение</label>
            <textarea name="message" id="call_request_message"></textarea>
        </div>

        <input type="submit" value="Отправить" />
    </form>
    @endif
</div>