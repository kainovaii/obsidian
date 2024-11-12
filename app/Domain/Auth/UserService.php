<?php

namespace App\Domain\Auth;

use Core\Http\Service\Service;

class UserService extends Service
{
    private string $username;
    
    public function interate(string $username): void
    {
        $this->username = $username;
    }

    public function update(array $data)
    {
        return $this->table('users')
            ->where(['username' => $this->username])
            ->update($data);
    }
}