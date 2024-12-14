<?php
namespace App\Registry;

use App\Domain\Auth\Event\LoginFailureEvent;
use App\Domain\Auth\Event\LoginSuccessEvent;
use App\Domain\Auth\Event\UserBannedEvent;
use App\Domain\Auth\Listener\LoginListener;
use App\Domain\Blog\BlogRepository;
use App\Domain\Blog\BlogService;
use App\Domain\Auth\UserService;
use Core\Http\Listener\EventDispatcher;
use Core\Http\Listener\ListenerProvider;
use Core\Http\Security\Csrf;
use Core\Http\User\LoggedUser;
use Core\Http\User\UserInterface;
use App\Domain\Auth\UserRepository;
use App\Domain\Auth\AuthService;
use Core\Http\Service\ServiceContainer;
use Core\Session\Flash;
use Core\Session\SessionManager;
use App\Domain\Role\Repository\RoleRepository;
use App\Domain\Role\Service\RoleService;
use App\Domain\Role\Repository\PolicyRepository;
use App\Domain\Role\Service\PolicyService;

class RegisterServiceContainer {
    public static array $_instance = [];
    public UserRepository $userRepository;
    public AuthService $userService;
    public SessionManager $session;
    public Flash $flash;
    public UserInterface $loggedUser;
    public UserService $user;
    public BlogRepository $blogRepository;
    public BlogService $blog;
    public EventDispatcher $dispatcher;
    public Csrf $csrf;
    public RoleRepository $roleRepository;
    public RoleService $roleService;
    public PolicyRepository $policyRepository;
    public PolicyService $policyService;
    
    public function registerService(ServiceContainer $container): void
    {
        $this->blog = $container->get(BlogService::class);
        $this->user = $container->get(UserService::class);
        $this->userService = $container->get(AuthService::class);
        $this->roleService = $container->get(RoleService::class);
        $this->policyService = $container->get(PolicyService::class);
    }

    public function registerRepository(ServiceContainer $container): void
    {
        $this->userRepository = $container->get(UserRepository::class);
        $this->blogRepository = $container->get(BlogRepository::class);
        $this->roleRepository = $container->get(RoleRepository::class);
        $this->policyRepository = $container->get(PolicyRepository::class);
    }

    public function registerOther(ServiceContainer $container)
    {
        $this->session = $container->get(SessionManager::class);
        $this->flash = $container->get(Flash::class);
        $this->loggedUser = $container->get(LoggedUser::class);
        $this->csrf = $container->get(Csrf::class);
    }

    public function registerListener(): void
    {
        $listenerProvider = (new ListenerProvider())
            ->addListener(LoginSuccessEvent::class, new LoginListener())
            ->addListener(LoginFailureEvent::class, new LoginListener())
            ->addListener(UserBannedEvent::class, new LoginListener());
        $this->dispatcher = new EventDispatcher($listenerProvider);
    }
}