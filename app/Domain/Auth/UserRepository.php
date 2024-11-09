<?php
namespace App\Domain\Auth;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

class UserRepository extends Manager {
    public function getAll(): Collection
    {
        return $this->table('users')
            ->get();
    }

    public function get(int $id): Collection
    {
        return $this->table('users')
            ->where(['id' => $id])
            ->get();
    }

    public function getByEmail(string $email): object|null
    {
        return $this->table('users')
            ->where('email', $email)
            ->first(['username', 'email', 'role', 'password', 'status', 'login_attempt', 'last_login']);
    }

    public function getByUsername(string $username): object|null
    {
        return $this->table('users')
            ->where('username', $username)
            ->first(['username', 'email', 'role', 'password', 'status', 'login_attempt', 'last_login']);
    }
}