<?php

namespace Core\Http\Security\Voter;

use App\Http\Security\AdminVoter;
use App\Http\Security\BlogVoter;
use Core\Http\User\LoggedUser;

class Security
{
    public static function authorizationChecker(mixed $attribute, mixed $subject = null): bool
    {
        $permission = new Permission();
        $user = new LoggedUser();

        $permission->addVoter(new BlogVoter());
        $permission->addVoter(new AdminVoter());

        $req = $permission->can($user, $attribute, $subject);

        return $req;
    }
}
