<?php
namespace App\Http\Api;

use App\Http\Security\BlogVoter;
use Core\Controller;
use Core\Http\Request;
use Core\Http\Router\Route;

class BlogApiController extends Controller
{
    #[Route('/api/blog/edit', 'POST', 'auth')]
    public function edit(Request $_request): void
    {
        $this->isGranted(BlogVoter::EDIT, $_request->getBody());
        $this->container->blog->interact($_request->getBody()['id']);
        $this->container->blog->update([
            'title' => $_request->getBody()['title'],
            'content' => $_request->getBody()['content']
        ]);

        $this->container->flash->success("L'article a bien été modifié");
        $this->redirect('/blog/'.$_request->getBody()['id'].'/edit');
    }

    #[Route('/api/blog/delete', 'POST', 'auth')]
    public function delete(Request $_request): void
    {
        $this->isGranted(BlogVoter::DELETE, $_request->getBody());

        $this->container->blog->interact((int) $_request->getBody()['id']);
        $this->container->blog->delete();

        $this->container->flash->success("L'article a bien été suprimé");
        $this->redirect('/blog');
    }

    #[Route('/api/blog/create', 'POST', 'auth')]
    public function create(Request $_request): void
    {
        $this->container->blog->create([
            'title' => $_request->getBody()['title'],
            'content' => $_request->getBody()['content'],
            'author' => $this->container->loggedUser->getUserIdentifier(),
        ]);

        $this->container->flash->success("L'article a bien été crée");
        $this->redirect('/blog');
    }
}