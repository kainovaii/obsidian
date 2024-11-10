<?php

namespace App\Domain\Role\Repository;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

class RoleRepository extends Manager
{
    public function getAll(): Collection
    {
        return $this->table('roles')
            ->get();
    }

    public function getSingle(string $name): Object
    {
        return $this->table('roles')
            ->where('name', $name)
            ->first();
    }
}