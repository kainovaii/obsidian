<div class="navbar bg-[#1E293B] border border-[#2A2E5E] px-[400px]">
    <div class="navbar-start">
        <div class="flex-1">
            <a href="/">
                <img src="https://i.ibb.co/Q7BhzG7/6736773a57904.webp" width="136px" alt="">
            </a>
        </div>
    </div>
    <div class="navbar-center">   
        <ul class="menu menu-horizontal">
            <a href="/"><li><button class="font-medium"><i class="fa-solid fa-house text-[12px]"></i>Home</button></li></a>
            <a href="/blog"><li><button class="font-medium"><i class="fa-solid fa-newspaper text-[12px]"></i>Blog</button></li></a>
        </ul>
    </div>
    <div class="navbar-end">
        <div class="flex-none">
            <?php if (loggedUser()->isLogged()) { ?>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="/assets/img/avatar.png" />
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