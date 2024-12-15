<?php
namespace App\Http\Controller;

use App\Domain\Blog\BlogService;
use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;
use Core\Http\Test\Test;
use Core\View;

class HomeController extends Controller
{
    #[Route('/', 'GET', 'default')]
    public function home(Request $_request): view
    {
        return $this->view('home');
    }
}