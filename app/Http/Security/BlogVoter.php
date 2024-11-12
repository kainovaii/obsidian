<?php

namespace App\Http\Security;

use App\Domain\Role\Service\PolicyService;
use Core\Http\Security\Voter\VoterInterface;
use Core\Http\Service\Container;
use Core\Http\User\UserInterface;

class BlogVoter implements VoterInterface
{
    const READ = 'read';
    const CREATE = 'create';
    const DELETE = 'delete';
    const EDIT = 'edit';

    private PolicyService $service;

    public function __construct()
    {
        $this->service = Container::get()->policyService;
    }

    public function supports(string $permssion, mixed $subject = NULL): bool
    {
        if (!in_array($permssion, [self::READ, self::CREATE, self::EDIT, self::DELETE])) {
            return false;
        }
        return true;
    }

    public function voteOnAttribute(UserInterface $user, string $permission, $subject = null): bool
    {
        $user = Container::get()->loggedUser->getUser();

        switch ($permission) {
            case self::READ:
                return true;
            case self::EDIT:
                if (!is_object($subject)) if ($subject['author'] == $user->username) return true;
                if ($subject->author == $user->username) return true;
            break;
            case self::DELETE:
                if (!is_object($subject)) if ($subject['author'] == $user->username) return true;
                if ($subject->author == $user->username) return true;
            break;

        }
        return false;
    }
}