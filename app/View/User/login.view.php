<div class="login__form">
    <form action="/api/users/login" method="POST">
        <?= getCsrf() ?>
        <div class="entry__form">
            <div class="field field_view">
                <div class="field__label">email</div>
                <div class="field__wrap">
                    <input class="field__input" type="email" name="email" placeholder="Email" required="" />
                </div>
            </div>
            <br />
            <div class="field field_view">
                <div class="field__label">password</div>
                <div class="field__wrap">
                    <input class="field__input" type="password" name="password" placeholder="Password" required="" />
                    <button class="field__view">
                        <svg class="icon icon-eye">
                            <use xlink:href="#icon-eye"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <button class="button entry__button">Login</>
        </div>
    </form>
</div>
<style>
.login__form {
    margin: auto;
    width: 20%;
    padding: 10px;
}
</style>