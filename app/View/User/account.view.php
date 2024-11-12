<?php use Core\Http\Service\Container ?>
<div class="container mt-3">
    <h3>Account</h3>
    <li>Username: <?= Container::get()->loggedUser->getUser()->username; ?></li>
    <li>Email: <?= Container::get()->loggedUser->getUser()->email; ?></li>
    <li><a href="/api/users/logout">Logout</a></li>
</div>