<?php

namespace App\Domain\Blog;

use Core\Http\Service\Service;
use Illuminate\Database\Capsule\Manager;

class BlogService extends Service
{
    private int $id;
    
    public function interact(int $id): void
    {
        $this->id = $id;
    }

    public function update(array $data)
    {
        return $this->table('blogs')
            ->where(['id' => $this->id])
            ->update($data);
    }

    public function create(array $data): bool
    {
        return $this->table('blogs')
            ->insert($data);
    }

    public function delete(): bool
    {
        return $this->table('blogs')
            ->where('id', $this->id)
            ->delete();
    }
}