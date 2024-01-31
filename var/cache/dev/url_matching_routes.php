<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin/categories/ajout' => [[['_route' => 'admin_categories_add', '_controller' => 'App\\Controller\\Admin\\CategoriesController::add'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, true, false, null]],
        '/admin/produits' => [[['_route' => 'admin_products_index', '_controller' => 'App\\Controller\\Admin\\ProductsController::index'], null, null, null, true, false, null]],
        '/admin/produits/ajout' => [[['_route' => 'admin_products_add', '_controller' => 'App\\Controller\\Admin\\ProductsController::add'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\Admin\\UsersController::index'], null, null, null, true, false, null]],
        '/admin/utilisateurs/edition' => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UsersController::edit'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|produits/(?'
                        .'|edition/([^/]++)(*:240)'
                        .'|suppression/(?'
                            .'|([^/]++)(*:271)'
                            .'|image/([^/]++)(*:293)'
                        .')'
                    .')'
                    .'|utilisateurs/edition/verification/([^/]++)(*:345)'
                .')'
                .'|/categories/([^/]++)(*:374)'
                .'|/produits/([^/]++)(*:400)'
                .'|/verif/([^/]++)(*:423)'
                .'|/oubli\\-pass/([^/]++)(*:452)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'admin_products_edit', '_controller' => 'App\\Controller\\Admin\\ProductsController::edit'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'admin_products_delete', '_controller' => 'App\\Controller\\Admin\\ProductsController::delete'], ['id'], null, null, false, true, null]],
        293 => [[['_route' => 'admin_products_delete_image', '_controller' => 'App\\Controller\\Admin\\ProductsController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        345 => [[['_route' => 'admin_users_edit_verif', '_controller' => 'App\\Controller\\Admin\\UsersController::changeVerif'], ['id'], ['POST' => 0], null, false, true, null]],
        374 => [[['_route' => 'categories_list', '_controller' => 'App\\Controller\\CategoriesController::list'], ['slug'], null, null, false, true, null]],
        400 => [[['_route' => 'products_details', '_controller' => 'App\\Controller\\ProductsController::details'], ['slug'], null, null, false, true, null]],
        423 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\RegistrationController::verifyUser'], ['token'], null, null, false, true, null]],
        452 => [
            [['_route' => 'reset_pass', '_controller' => 'App\\Controller\\SecurityController::resetPass'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
