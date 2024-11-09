<?php

namespace Core\Http\Service;

use App\Domain\Auth\Event\LoginFailureEvent;
use App\Domain\Auth\Event\LoginSuccessEvent;
use App\Domain\Auth\Event\UserBannedEvent;
use App\Domain\Auth\Listener\LoginListener;
use App\Domain\Blog\BlogRepository;
use App\Domain\Blog\BlogService;
use App\Domain\Auth\UserService;
use Core\Http\Listener\EventDispatcher;
use Core\Http\Listener\ListenerProvider;
use Core\Http\User\LoggedUser;
use Core\Http\User\UserInterface;
use App\Domain\Auth\UserRepository;
use App\Domain\Auth\AuthService;
use Core\Http\Service\ServiceContainer;
use Core\Session\Flash;
use Core\Session\SessionManager;

class RegisterServiceContainer {
    public UserRepository $userRepository;
    public AuthService $userService;
    public SessionManager $session;
    public Flash $flash;
    public UserInterface $loggedUser;
    public UserService $user;
    public BlogRepository $blogRepository;
    public BlogService $blog;
    public EventDispatcher $dispatcher;
    public static array $_instance = [];
    
    public function __construct()
    {
        $this->registerService();
        $this->registerListener();
    }

    public function registerService(): void
    {
        $container = new ServiceContainer();
        $this->userRepository = $container->get(UserRepository::class);
        $this->userService = $container->get(AuthService::class);
        $this->user = $container->get(UserService::class);
        $this->session = $container->get(SessionManager::class);
        $this->flash = $container->get(Flash::class);
        $this->loggedUser = $container->get(LoggedUser::class);
        $this->blogRepository = $container->get(BlogRepository::class);
        $this->blog = $container->get(BlogService::class);
    }

    public function registerListener(): void
    {
        $listenerProvider = (new ListenerProvider())
            ->addListener(LoginSuccessEvent::class, new LoginListener())
            ->addListener(LoginFailureEvent::class, new LoginListener())
            ->addListener(UserBannedEvent::class, new LoginListener());

        $this->dispatcher = new EventDispatcher($listenerProvider);
    }

    public static function get(): mixed
    {
        $class = get_called_class();

        if(!isset(self::$_instance[$class]))
        {
            self::$_instance[$class] = new $class;
        }

        return self::$_instance[$class];
    }
}