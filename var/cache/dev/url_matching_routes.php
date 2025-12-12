<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/etudiants' => [[['_route' => 'etudiants_index', '_controller' => 'App\\Controller\\EtudiantController::index'], null, null, null, false, false, null]],
        '/etudiants/new' => [[['_route' => 'etudiants_new', '_controller' => 'App\\Controller\\EtudiantController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:37)'
                        .'|\\.well\\-known/genid/([^/]++)(*:72)'
                        .'|validation_errors/([^/]++)(*:105)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:142)'
                    .'|/(?'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|v(?'
                            .'|alidation_errors/([^/]++)(?'
                                .'|(*:260)'
                            .')'
                            .'|isites(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:304)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:330)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:368)'
                                .')'
                            .')'
                        .')'
                        .'|tuteurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:415)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:441)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:479)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:519)'
                .'|/etudiants/([^/]++)/edit(*:551)'
                .'|/visites/(?'
                    .'|etudiant/([^/]++)(?'
                        .'|(*:591)'
                        .'|/new(*:603)'
                    .')'
                    .'|([^/]++)/edit(*:625)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => null, '_api_respond' => true], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        72 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => true], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        105 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => null, '_api_respond' => true, 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => true], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        260 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_xml', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_xml', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        304 => [[['_route' => '_api_/visites/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Visite', '_api_operation_name' => '_api_/visites/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        330 => [
            [['_route' => '_api_/visites{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Visite', '_api_operation_name' => '_api_/visites{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/visites{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Visite', '_api_operation_name' => '_api_/visites{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        368 => [
            [['_route' => '_api_/visites/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Visite', '_api_operation_name' => '_api_/visites/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/visites/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Visite', '_api_operation_name' => '_api_/visites/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        415 => [[['_route' => '_api_/tuteurs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Tuteur', '_api_operation_name' => '_api_/tuteurs/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        441 => [
            [['_route' => '_api_/tuteurs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Tuteur', '_api_operation_name' => '_api_/tuteurs{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/tuteurs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Tuteur', '_api_operation_name' => '_api_/tuteurs{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        479 => [
            [['_route' => '_api_/tuteurs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Tuteur', '_api_operation_name' => '_api_/tuteurs/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/tuteurs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Tuteur', '_api_operation_name' => '_api_/tuteurs/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        519 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        551 => [[['_route' => 'etudiants_edit', '_controller' => 'App\\Controller\\EtudiantController::edit'], ['id'], null, null, false, false, null]],
        591 => [[['_route' => 'visites_index', '_controller' => 'App\\Controller\\VisiteController::index'], ['id'], null, null, false, true, null]],
        603 => [[['_route' => 'visites_new', '_controller' => 'App\\Controller\\VisiteController::new'], ['id'], null, null, false, false, null]],
        625 => [
            [['_route' => 'visites_edit', '_controller' => 'App\\Controller\\VisiteController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
