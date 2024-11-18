<div class="account">
    <div class="account__head">
        <div class="account__details">
            <div class="account__user"><?= loggedUser()->getUserIdentifier() ?></div>
            <div class="account__email"><?= loggedUser()->getUser()->email ?></div>
        </div>
        <div class="account__level"><?= loggedUser()->getRoles() ?></div>
    </div>
    <div class="account__settings">

        <div class="account__box">
            <div class="account__subtitle">level 2</div>
            <div class="account__item">
                <div class="account__category">Radio</div>
                <label class="switch">
                    <input class="switch__input" type="checkbox" checked="checked" /><span class="switch__inner"><span class="switch__box"></span></span>
                </label>
            </div>
            <div class="account__item">
                <div class="account__category">Text</div>
                <div class="account__content">Text</div>
            </div>
        </div>
    </div>
    <div class="account__btns">
        <button class="button account__button">Save settings</button>
    </div>
</div>