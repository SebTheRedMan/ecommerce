<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::main'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'products_index', '_controller' => 'App\\Controller\\ProductsController::index'], null, null, null, true, false, null]],
        '/profil' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profil/commandes' => [[['_route' => 'profile_orders', '_controller' => 'App\\Controller\\ProfileController::orders'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/renvoiverif' => [[['_route' => 'resend_verif', '_controller' => 'App\\Controller\\RegistrationController::resendVerif'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/categories/([^/]++)(*:27)'
                .'|/produits/([^/]++)(*:52)'
                .'|/verif/([^/]++)(*:74)'
                .'|/oubli\\-pass/([^/]++)(*:102)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'categories_list', '_controller' => 'App\\Controller\\CategoriesController::list'], ['slug'], null, null, false, true, null]],
        52 => [[['_route' => 'products_details', '_controller' => 'App\\Controller\\ProductsController::details'], ['slug'], null, null, false, true, null]],
        74 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\RegistrationController::verifyUser'], ['token'], null, null, false, true, null]],
        102 => [
            [['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
