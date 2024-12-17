<?php

namespace App\Domain\Blog;

use Core\Http\Register;
use Core\Repository;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Collection;

#[Register('blogRepository', BlogRepository::class)]
class BlogRepository extends Repository
{
    public function getAll(): Collection
    {
        return $this->table('blogs')
            ->get();
    }

    public function getSingle(int $id): object
    {
        return $this->table('blogs')
            ->where('id', $id)
            ->first();
    }
}