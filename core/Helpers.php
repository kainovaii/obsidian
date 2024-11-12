<?php

use Core\Http\Security\Csrf;
use Core\Http\Service\Container;
use Core\Http\User\LoggedUser;

function loggedUser(): LoggedUser
{
    return Container::get()->loggedUser;
}

function flashRender(): void
{
    if (isset($_SESSION['flash']))
    {
        echo Container::get()->flash->render();
        Container::get()->flash->clear(); 
    }
}

function getCsrf(): string
{
    return Csrf::render();
}