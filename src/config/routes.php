<?php

// use App\Controllers\ApiUsers;

return [
    // '/' => \App\Controllers\Homepage::class,
    '/users' => \App\Controllers\Users::class,
    '/todo' => \App\Controllers\Todos::class,
    '/login' => \App\Controllers\Login::class,
    '/register' => \App\Controllers\Register::class,
    '/logout' =>\App\Controllers\Logout::class,
];