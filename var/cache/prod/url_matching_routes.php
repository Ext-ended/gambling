<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/duck_duck_jump' => [[['_route' => 'app_duck_duck_jump', '_controller' => 'App\\Controller\\DuckDuckJumpController::index'], null, null, null, false, false, null]],
        '/api/duck_duck_jump/start' => [[['_route' => 'api_duck_duck_jump_start', '_controller' => 'App\\Controller\\DuckDuckJumpController::start'], null, ['POST' => 0], null, false, false, null]],
        '/api/duck_duck_jump/step' => [[['_route' => 'app_duck_duck_jump_step', '_controller' => 'App\\Controller\\DuckDuckJumpController::step'], null, null, null, false, false, null]],
        '/api/duck_duck_jump/cashout' => [[['_route' => 'app_duck_duck_jump_cashout', '_controller' => 'App\\Controller\\DuckDuckJumpController::cashout'], null, null, null, false, false, null]],
        '/duck_duck_jump/leaderboard' => [[['_route' => 'app_duck_duck_jump_leaderboard', '_controller' => 'App\\Controller\\DuckDuckJumpController::spinnerLeaderboard'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\HomeController::user'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/spinner' => [[['_route' => 'app_spinner', '_controller' => 'App\\Controller\\SpinnerController::index'], null, null, null, false, false, null]],
        '/api/spin' => [[['_route' => 'api_spin', '_controller' => 'App\\Controller\\SpinnerController::spin'], null, ['POST' => 0], null, false, false, null]],
        '/spinner/leaderboard' => [[['_route' => 'app_spinner_leaderboard', '_controller' => 'App\\Controller\\SpinnerController::spinnerLeaderboard'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
