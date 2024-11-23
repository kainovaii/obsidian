<div class="navbar bg-[#1E293B] border-b-[2px] border-[#475569] px-[400px]">
    <div class="navbar-start">
        <div class="flex-1">
            <a href="/">
                <img src="https://i.ibb.co/Q7BhzG7/6736773a57904.webp" width="136px" alt="">
            </a>
        </div>
    </div>
    <div class="navbar-center">   
        <ul class="menu menu-horizontal">
            <a href="/"><li><button>Home</button></li></a>
            <a href="/blog"><li><button>Blog</button></li></a>
        </ul>
    </div>
    <div class="navbar-end">
        <div class="flex-none">
            <?php if (loggedUser()->isLogged()) { ?>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="http://localhost:8080/assets/img/content/avatar-user.jpg" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-[#1E293B] rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="/users/account">Profil</a></li>
                    <li><a href="/settings">Settings</a></li>
                    <li><a href="/api/users/logout">Logout</a></li>
                </ul>
            </div>
            <?php } else { ?>
            <a class="button-stroke button-small header__button" href="/users/login">Login</a>
            <?php } ?>
        </div>
    </div>
</div>