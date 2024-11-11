<?php

namespace App\Http\Controller;

use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;
use Core\View;

class PolicyController extends Controller
{
    #[Route('/policies', 'GET', 'auth')]
    public function index(Request $_request): View
    {
        return $this->view('/policy/home', 'main', [
            'policies' => $this->policyRepository->getAll()
        ]);
    }

    #[Route('/policies/{name}', 'GET', 'auth')]
    public function show(Request $_request): View
    {
        $query = $this->policyRepository->getSingle($_request->getParams('name'));
        return $this->view('/policy/show', 'main', [
            'policy' => $query,
            'permissions' => $query->permissions
        ]);
    }

    #[Route('/policies/{name}/edit', 'GET', 'auth')]
    public function edit(Request $_request): View
    {
        $query = $this->policyRepository->getSingle($_request->getParams('name'));
        return $this->view('/policy/edit', 'main', [
            'policy' => $query,
            'permissions' => $query->permissions
        ]);
    }
}