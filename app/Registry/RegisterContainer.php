<?php

namespace App\Registry;

use App\Domain\Blog\BlogRepository;
use App\Domain\Blog\BlogService;
use App\Domain\Auth\UserService;
use App\Domain\Auth\UserRepository;
use App\Domain\Auth\AuthService;
use App\Domain\Role\Repository\RoleRepository;
use App\Domain\Role\Service\RoleService;
use App\Domain\Role\Repository\PolicyRepository;
use App\Domain\Role\Service\PolicyService;

class RegisterContainer
{
    /*
    |--------------------------------------
    | Services
    |--------------------------------------
    */
    public AuthService $authService;
    public UserService $userService;
    public BlogService $blogService;
    public PolicyService $policyService;
    public RoleService $roleService;
    /*
    |--------------------------------------
    | Repository
    |--------------------------------------
    */
    public PolicyRepository $policyRepository;
    public UserRepository $userRepository;
    public BlogRepository $blogRepository;
    public RoleRepository $roleRepository;
}