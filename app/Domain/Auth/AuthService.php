<?php

namespace App\Domain\Auth;

use App\Domain\Auth\Event\LoginFailureEvent;
use App\Domain\Auth\Event\LoginSuccessEvent;
use Core\Http\Request;
use Core\Http\Service\Container;

class AuthService extends UserRepository 
{
    public function authenticate(Request $_resquest): bool
    {
        if ($_resquest->getBody()['csrf'] === Container::get()->csrf->getToken())
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
                        Container::get()->session->set('user', $user);
                        Container::get()->dispatcher->dispatch(new LoginSuccessEvent($user));
                        Container::get()->flash->success('Login successfull !');
                        return true;
                    } else {
                        Container::get()->flash->error('Sorry incorect password !');
                        Container::get()->dispatcher->dispatch(new LoginFailureEvent($user));
                        return false;
                    }
                } else {
                    Container::get()->flash->error('Oops! 😖 Ce compte a été bloqué');
                    return false;
                }
            } else {
                Container::get()->flash->error('Sorry this account does not exist');
                return false;
            }
        } else {
            Container::get()->flash->error('Csrf token invalid');
            return false;
        }
    }

    public function signout(): bool
    {
        Container::get()->session->delete('user');
        Container::get()->flash->success('Logout successfull !');
        return true;
    }
}
