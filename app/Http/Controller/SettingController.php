<?php
namespace App\Http\Controller;

use App\Http\Security\AdminVoter;
use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;
use Core\View;

class SettingController extends Controller
{
    #[Route('/settings', 'GET', 'auth')]
    public function home(Request $_request): View
    {
        $this->isGranted(AdminVoter::class);
        return $this->view('setting/home', 'setting');
    }

    #[Route('/settings/blog', 'GET', 'auth')]
    public function blog_home(Request $_request): View
    {
        $this->isGranted(AdminVoter::class);
        return $this->view('setting/blog_home', 'setting', [
            'articles' => $this->container->blogRepository->getAll()
        ]);
    }

    #[Route('/settings/blog/{id}', 'GET', 'auth')]
    public function blog_show(Request $_request): View
    {
        $query = $this->container->blogRepository->getSingle($_request->getParams('id'));

        $this->isGranted(AdminVoter::class);
        return $this->view('setting/blog_show', 'setting', [
            'article' => $query
        ]);
    }

    #[Route('/settings/blog/new', 'GET', 'auth')]
    public function blog_new(Request $_request): View
    {
        $this->isGranted(AdminVoter::class);
        return $this->view('setting/blog_new', 'setting');
    }

    #[Route('/settings/role', 'GET', 'auth')]
    public function role_home(Request $_request): View
    {
        return $this->view('setting/role_home', 'setting', [
            'roles' => $this->container->roleRepository->getAll()
        ]);
    }

    #[Route('/settings/role/{name}', 'GET', 'auth')]
    public function show(Request $_request): View
    {
        $query = $this->container->roleRepository->getSingle($_request->getParams('name'));

        $this->isGranted(AdminVoter::class);
        return $this->view('/setting/role_show', 'setting', [
            'role' => $query
        ]);
    }
}