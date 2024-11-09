<?php

namespace App\Domain\Auth;

use Illuminate\Database\Capsule\Manager;

class UserService extends Manager
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