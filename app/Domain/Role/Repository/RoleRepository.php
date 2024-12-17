<?php

namespace App\Domain\Role\Repository;

use Core\Http\Register;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

#[Register('roleRepository', RoleRepository::class)]
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