<?php

namespace App\Domain\Auth;

use App\Domain\Auth\Event\LoginFailureEvent;
use App\Domain\Auth\Event\LoginSuccessEvent;
use Core\Http\Request;
use Core\Http\Service\Service;

class AuthService extends UserRepository 
{
    public function authenticate(Request $_resquest): bool
    {
        if ($_resquest->getBody()['csrf'] === Service::get()->session->get('csrf'))
        {
            $email = (string) $_resquest->getBody()['email'];
            $password = (string) $_resquest->getBody()['password'];
            $user =  $this->getByEmail($email);
            if ($user)
            {
                if ($user->status >= 1)
                {
                    if (password_verify($password, $user->password))
                    {
                        Service::get()->session->set('user', $user);
                        Service::get()->dispatcher->dispatch(new LoginSuccessEvent($user));
                        return true;
                    } else {
                        Service::get()->flash->error('Sorry incorect password !');
                        Service::get()->dispatcher->dispatch(new LoginFailureEvent($user));
                        return false;
                    }
                } else {
                    Service::get()->flash->error('Oops! 😖 Ce compte a été bloqué');
                    return false;
                }
            } else {
                Service::get()->flash->error('Sorry this account does not exist');
                return false;
            }
        } else {
            Service::get()->flash->error('Csrf token invalid');
            return false;
        }
    }

    public function signout(): bool
    {
        Service::get()->session->delete('user');
        return true;
    }
}
