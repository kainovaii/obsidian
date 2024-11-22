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
        $formData = $_request->getBody();
        $perms = array_splice($formData, 1);

        foreach ($perms as $key => $perm)
        {
            if ($perm==="true")
            {
                $data[$key] = true;
            } else {
                $data[$key] = false;
            }
        }

        $this->container->policyService->interact($formData['policy_name']);
        $this->container->policyService->update($data);

        $this->container->flash->success("La policy a bien été modifié");
        $this->redirect('/settings/policy/'.$formData['policy_name']);

    }
}