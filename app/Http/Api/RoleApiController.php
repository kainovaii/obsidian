<?php
namespace App\Http\Api;

use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;

class RoleApiController extends Controller
{
    #[Route('/api/roles/edit', 'POST', 'auth')]
    public function edit(Request $_request): void
    {
        $this->roleService->interact($_request->getBody()['name']);
        $this->roleService->update([
            'name' => $_request->getBody()['name'],
            'prefix' => $_request->getBody()['prefix'],
            'policy' => $_request->getBody()['policy']
        ]);

        $this->flash->success("Le role a bien été modifié");
        $this->redirect('/roles/'.$_request->getBody()['name'].'/edit');
    }
}