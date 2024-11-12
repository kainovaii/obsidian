<?php

namespace App\Domain\Role\Service;

use Core\Http\Service\Container;
use Illuminate\Database\Capsule\Manager;

class PolicyService extends Manager
{
    private string $name;

    public function interact(string $name): void
    {
        $this->name = $name;
    }

    public function update(array $data): bool
    {
        return $this->table('policies')
            ->where('name', $this->name)
            ->update($data);
    }

    public function getPermission(string $policy, string $permission): bool
    {
        $query = Container::get()->policyService
            ->table('policies')
            ->where('name', $policy)
            ->first($permission);

        foreach ($query as $perm)
        {
            if ($perm === "false") return false;
            if ($perm === "true") return true;
        }
        return false;
    }
}