<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/plat/new' => [[['_route' => 'plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/category/([^/]++)(?'
                    .'|(*:63)'
                    .'|/edit(*:75)'
                    .'|(*:82)'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|(*:107)'
                    .'|/edit(*:120)'
                    .'|(*:128)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        75 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        107 => [[['_route' => 'plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        120 => [[['_route' => 'plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        128 => [
            [['_route' => 'plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
