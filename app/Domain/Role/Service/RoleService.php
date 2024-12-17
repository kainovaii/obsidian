<?php

namespace App\Domain\Role\Service;

use Core\Http\Register;
use Illuminate\Database\Capsule\Manager;

#[Register('roleService', RoleService::class)]
class RoleService extends Manager
{
    private string $name;

    public function interact(string $name): void
    {
        $this->name = $name;
    }

    public function update(array $data): bool
    {
        return $this->table('roles')
            ->where('name', $this->name)
            ->update($data);
    }
}
