<form method="POST" class="callback__form form">
    <input type="hidden" name="formid" value="callback">

    <div class="form-group">
        <label class="form-label" for="name">Ваше имя</label>
        <input class="form-input" type="text" id="name" name="name" placeholder="Имя" required>
    </div>

    <div class="form-group">
        <label class="form-label" for="phone">Ваш номер телефона</label>
        <input class="form-input" type="tel" id="phone" name="phone" required
            placeholder="+7 (000) 000-00-00">
    </div>

    <div class="form-group">
        <label class="form-label" for="message">Расскажите о своем проекте или идее</label>
        <input class="form-input" type="text" id="message" name="message">
    </div>

    <p>
        Нажав на кнопку, соглашаюсь на
        <a href="/soglasie-na-obrabotku-personalnyh-dannyh">
            обработку персональных данных
        </a>
    </p>

    <div class="form-group">
        <button class="form-button" type="submit">Оправить</button>
    </div>

</form>
