<?php

namespace App\Domain\Auth\Listener;

use App\Domain\Auth\Event\LoginFailureEvent;
use App\Domain\Auth\Event\LoginSuccessEvent;
use Core\Http\Service\Service;
use Core\Http\User\UserInterface;

class LoginListener
{
    public function __invoke($event): void
    {
        if ($event instanceof LoginSuccessEvent) { $this->onLoginSuccess($event); }
        if ($event instanceof LoginFailureEvent) { $this->onLoginFailure($event); }
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        if ($user instanceof UserInterface)
        {
            Service::get()->user->interate($user->getUserIdentifier());
            Service::get()->user->update(['last_login' => new \DateTimeImmutable(), 'login_attempt' => 0]);
        }
    }
    
    public function onLoginFailure(LoginFailureEvent $event): void
    {
        $user = $event->getUser();
        if ($user instanceof \stdClass)
        {
            Service::get()->user->interate($user->username);

            if ($user->login_attempt >= 3)
            {
                Service::get()->user->update(['status' => 0]);
            } else {
                Service::get()->user->update(['login_attempt' => $user->login_attempt+1]);
            }
        }
    }
}