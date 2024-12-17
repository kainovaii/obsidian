<?php

namespace App\Http\Security;

use Core\Http\Register;
use Core\Http\Security\Voter\VoterInterface;
use Core\Http\User\UserInterface;

#[Register('adminVoter', AdminVoter::class)]
class AdminVoter implements VoterInterface
{    public function supports(string $permssion, mixed $subject = NULL): bool
    {
        return true;
    }

    public function voteOnAttribute(UserInterface $user, string $permission, $subject = null): bool
    {
        $user = loggedUser();
        if ($user->getRoles() === 'administrator') return true;
        return false;
    }
}