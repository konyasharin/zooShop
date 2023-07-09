<div class="modal">
    <form class="form__registration">
        <h2>Регистрация</h2>
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="email" placeholder="Электронная почта">
        <input type="text" name="password" placeholder="Пароль">
        <input type="text" name="passwordRepeat" placeholder="Повторите пароль" class="form__last-input">
        <div class="error"></div>
        <button type="submit">Регистрация</button>
    </form>
    <form class="form__entry">
        <h2>Вход</h2>
        <input type="text" name="login" placeholder="Логин">
        <div class="form__forget-block">
            <input type="text" name="password" placeholder="Пароль" class="form__last-input">
            <span class="form__forget"><h6>Забыли пароль</h6></span>
        </div>
        <div class="error"></div>
        <button type="submit">Войти</button>
    </form>
    <div class="form__choose">
        <button id="registrationChoose">Регистрация</button>
        <button id="entryChoose">Вход</button>
    </div>
</div>