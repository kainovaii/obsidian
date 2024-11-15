<?php
namespace App\Http\Controller;

use App\Http\Security\AdminVoter;
use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;
use Core\View;

class SettingController extends Controller
{
    #[Route('/settings', 'GET', 'default')]
    public function home(Request $_request): View
    {
        $this->isGranted(AdminVoter::class);
        return $this->view('setting/home', 'setting');
    }

    #[Route('/settings/blog', 'GET', 'default')]
    public function blog(Request $_request): View
    {
        $this->isGranted(AdminVoter::class);
        return $this->view('setting/blog_home', 'setting', [
            'articles' => $this->container->blogRepository->getAll()
        ]);
    }

    #[Route('/settings/role', 'GET', 'auth')]
    public function role(Request $_request): View
    {
        return $this->view('setting/role_home', 'setting', [
            'roles' => $this->container->roleRepository->getAll()
        ]);
    }
}