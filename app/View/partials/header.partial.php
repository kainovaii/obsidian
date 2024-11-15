<header class="header js-header registered" data-id="#header">
    <div class="header__center center">
        <a href="/" class="header__logo">
            <img class="header__pic header__pic_desktop some-icon" src="https://i.ibb.co/Q7BhzG7/6736773a57904.webp" alt="Obsidian" />
            <img class="header__pic header__pic_desktop some-icon-dark" src="https://i.ibb.co/Q7BhzG7/6736773a57904.webp" alt="Obsidian" />
            <img class="header__pic header__pic_mobile" src="https://i.ibb.co/Q7BhzG7/6736773a57904.webp" alt="Obsidian" />
        </a>
        <div class="header__wrapper">
            <div class="header__wrap js-header-wrap">
                <nav class="header__nav">
                    <a class="header__item" href="/">Home</a>
                    <a class="header__item" href="/blog">Blog</a>
                </nav>
            </div>
            <div class="header__control">
                <?php if (loggedUser()->isLogged()) { ?>
                <!--
                <div class="header__item header__item_notifications js-header-item">
                    <button class="header__head js-header-head active">
                        <svg class="icon icon-bell">
                            <use xlink:href="#icon-bell"></use>
                        </svg>
                    </button>
                    <div class="header__body js-header-body">
                        <div class="header__title">Notifications</div>
                        <div class="header__list">
                            <a class="header__notification header__notification_new" href="notifications.html">
                                <div class="header__subtitle">Login attempted from new IP</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                            <a class="header__notification header__notification_new" href="notifications.html">
                                <div class="header__subtitle">Request to reset security</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                            <a class="header__notification header__notification_new" href="notifications.html">
                                <div class="header__subtitle">Login attempted from new IP</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                            <a class="header__notification header__notification_new" href="notifications.html">
                                <div class="header__subtitle">Request to reset security</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                            <a class="header__notification" href="notifications.html">
                                <div class="header__subtitle">Login attempted from new IP</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                            <a class="header__notification" href="notifications.html">
                                <div class="header__subtitle">Request to reset security</div>
                                <div class="header__date">2021-03-10 20:19:15</div>
                            </a>
                        </div>
                        <div class="header__btns">
                            <a class="button-small header__button" href="notifications.html">View all</a>
                            <button class="button-stroke button-small header__button">Clear all</button>
                        </div>
                    </div>
                </div>
                <label class="theme js-theme">
                    <input class="theme__input" type="checkbox" />
                    <span class="theme__icon">
                        <svg class="icon icon-theme-light">
                            <use xlink:href="#icon-theme-light"></use>
                        </svg>
                        <svg class="icon icon-theme-dark">
                            <use xlink:href="#icon-theme-dark"></use>
                        </svg>
                    </span>
                </label>
                -->
                <div class="header__item header__item_user js-header-item">
                    <button class="header__head js-header-head"><img src="/assets/img/content/avatar-user.jpg" alt="Avatar" /></button>
                    <div class="header__body js-header-body">
                        <a class="header__el" href="/users/account">
                            <div class="header__icon">
                                <svg class="icon icon-user">
                                    <use xlink:href="#icon-user"></use>
                                </svg>
                            </div>
                            <div class="header__details">
                                <div class="header__title">Profile</div>
                                <div class="header__content">Important account details</div>
                            </div>
                        </a>
                        <a class="header__el" href="/settings">
                            <div class="header__icon">
                                <svg class="icon icon-cog">
                                    <use xlink:href="#icon-cog"></use>
                                </svg>
                            </div>
                            <div class="header__details">
                                <div class="header__title">Settings</div>
                                <div class="header__content">View additional settings</div>
                            </div>
                        </a>
                        <a class="header__el" href="/api/users/logout">
                            <div class="header__icon">
                                <svg class="icon icon-exit">
                                    <use xlink:href="#icon-exit"></use>
                                </svg>
                            </div>
                            <div class="header__details">
                                <div class="header__title">Log out</div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php } else { ?>
                <a class="button-stroke button-small header__button" href="/users/login">Login</a>
                <?php } ?>
            </div>
            <div class="header__btns"><a class="button-small header__button" href="sign-up.html">Sign Up</a><a class="button-stroke button-small header__button" href="sign-in.html">Login</a></div>
            <button class="header__burger js-header-burger"></button>
        </div>
    </div>
</header>