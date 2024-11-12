<?php

namespace App\Http\Controller;

use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;
use Core\View;

class RoleController extends Controller
{
    #[Route('/roles', 'GET', 'auth')]
    public function index(Request $_request): View
    {
        return $this->view('/role/home', 'main', [
            'roles' => $this->container->roleRepository->getAll()
        ]);
    }

    #[Route('/roles/{name}', 'GET', 'auth')]
    public function show(Request $_request): View
    {
        $query = $this->container->roleRepository->getSingle($_request->getParams('name'));
        return $this->view('/role/show', 'main', [
            'role' => $query
        ]);
    }

    #[Route('/roles/{name}/edit', 'GET', 'auth')]
    public function edit(Request $_request): View
    {
        $query = $this->container->roleRepository->getSingle($_request->getParams('name'));
        return $this->view('/role/edit', 'main', [
            'role' => $query,
            'policies' => $this->container->policyRepository->getAll()
        ]);
    }
}