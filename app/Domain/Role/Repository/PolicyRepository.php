<?php

namespace App\Domain\Role\Repository;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

class PolicyRepository extends Manager
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