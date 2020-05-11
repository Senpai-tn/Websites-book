<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '' => [[], ['_controller' => 'App\\Controller\\CategoryController::Add'], [], [['text', '/category/add']], [], []],
    'delete_category' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorydelete']], [], []],
    'owner' => [[], ['_controller' => 'App\\Controller\\UserController::Owner'], [], [['text', '/owner']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\UserController::Users'], [], [['text', '/users']], [], []],
    'promote' => [['id'], ['_controller' => 'App\\Controller\\UserController::promoteUserAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/promote']], [], []],
    'dispromote' => [['id'], ['_controller' => 'App\\Controller\\UserController::dispromoteUserAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/dispromote']], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/delete']], [], []],
    'ajax_search' => [[], ['_controller' => 'App\\Controller\\WebsiteController::searchAction'], [], [['text', '/search']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\WebsiteController::index'], [], [['text', '/']], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::Show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/website']], [], []],
    'category' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::SearchByCategory'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/category']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\WebsiteController::Admin'], [], [['text', '/admin']], [], []],
    'deleted' => [[], ['_controller' => 'App\\Controller\\WebsiteController::Deleted'], [], [['text', '/deleted']], [], []],
    'add_website' => [[], ['_controller' => 'App\\Controller\\WebsiteController::Add'], [], [['text', '/add']], [], []],
    'list_websites' => [[], ['_controller' => 'App\\Controller\\WebsiteController::List'], [], [['text', '/list']], [], []],
    'delete_website' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/websitedelete']], [], []],
    'accept' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::Accept'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/accept']], [], []],
    'refuse' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::Refuse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/refuse']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\WebsiteController::update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/update']], [], []],
    'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
    'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
    'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
    'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
    'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
    'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
    'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
    'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/register/confirm']], [], []],
    'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
    'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
    'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
    'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
    'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetting/reset']], [], []],
    'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
];
