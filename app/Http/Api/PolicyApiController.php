<?php
namespace App\Http\Api;

use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;

class PolicyApiController extends Controller
{
    #[Route('/api/policies/edit', 'POST', 'auth')]
    public function edit(Request $_request): void
    {
        $this->policyService->interact($_request->getBody()['name']);
        $this->policyService->update([
            'name' => $_request->getBody()['name'],
        ]);

        $this->flash->success("La policy a bien été modifié");
        $this->redirect('/policies/'.$_request->getBody()['name'].'/edit');
    }
}