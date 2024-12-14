<?php

namespace App\Registry;

use App\Http\Security\AdminVoter;
use App\Http\Security\BlogVoter;
use Core\Http\Security\Voter\Permission;
use Core\Http\User\LoggedUser;

class RegisterVoter
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