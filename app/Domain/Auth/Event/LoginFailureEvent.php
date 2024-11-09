<?php

namespace App\Domain\Auth\Event;

use Core\Http\Listener\Event;
use Core\Http\Service\Service;
use Core\Http\User\UserInterface;

class LoginFailureEvent extends Event
{
    /**
     * @var object
     */
    private $object;

    /**
     * PreCreateEvent constructor.
     * @param object $object
     */
    public function __construct(object $object)
    {
        $this->object = $object;
    }

    public function getUser(): Object
    {
        return Service::get()
            ->userRepository
            ->getByEmail($this->object->email);
    }
}
