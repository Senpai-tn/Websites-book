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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/category/add' => [[['_route' => '', '_controller' => 'App\\Controller\\CategoryController::Add'], null, null, null, false, false, null]],
        '/owner' => [[['_route' => 'owner', '_controller' => 'App\\Controller\\UserController::Owner'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::Users'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\WebsiteController::searchAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\WebsiteController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\WebsiteController::Admin'], null, null, null, false, false, null]],
        '/deleted' => [[['_route' => 'deleted', '_controller' => 'App\\Controller\\WebsiteController::Deleted'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add_website', '_controller' => 'App\\Controller\\WebsiteController::Add'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list_websites', '_controller' => 'App\\Controller\\WebsiteController::List'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/category(?'
                    .'|delete/([^/]++)(*:196)'
                    .'|/([^/]++)(*:213)'
                .')'
                .'|/promote/([^/]++)(*:239)'
                .'|/dispromote/([^/]++)(*:267)'
                .'|/u(?'
                    .'|ser/delete/([^/]++)(*:299)'
                    .'|pdate/([^/]++)(*:321)'
                .')'
                .'|/website(?'
                    .'|/([^/]++)(*:350)'
                    .'|delete/([^/]++)(*:373)'
                .')'
                .'|/accept/([^/]++)(*:398)'
                .'|/re(?'
                    .'|fuse/([^/]++)(*:425)'
                    .'|gister/confirm/([^/]++)(*:456)'
                    .'|setting/reset/([^/]++)(*:486)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        213 => [[['_route' => 'category', '_controller' => 'App\\Controller\\WebsiteController::SearchByCategory'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'promote', '_controller' => 'App\\Controller\\UserController::promoteUserAction'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'dispromote', '_controller' => 'App\\Controller\\UserController::dispromoteUserAction'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'update', '_controller' => 'App\\Controller\\WebsiteController::update'], ['id'], null, null, false, true, null]],
        350 => [[['_route' => 'show', '_controller' => 'App\\Controller\\WebsiteController::Show'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'delete_website', '_controller' => 'App\\Controller\\WebsiteController::Delete'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'accept', '_controller' => 'App\\Controller\\WebsiteController::Accept'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'refuse', '_controller' => 'App\\Controller\\WebsiteController::Refuse'], ['id'], null, null, false, true, null]],
        456 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        486 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
