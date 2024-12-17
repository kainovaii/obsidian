<?php

namespace App\Domain\Role\Repository;

use Core\Http\Register;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

#[Register('policyRepository', PolicyRepository::class)]
class PolicyRepository extends RoleRepository
{
    public function getAll(): Collection
    {
        return $this->table('policies')
            ->get();
    }

    public function getSingle(string $name): Object
    {
        return $this->table('policies')
            ->where('name', $name)
            ->first();
    }
}