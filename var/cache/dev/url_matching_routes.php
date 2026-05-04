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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'cgu', '_controller' => 'App\\Controller\\AccueilController::cgu'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin.categories.index', '_controller' => 'App\\Controller\\AdminCategorieController::index'], null, null, null, false, false, null]],
        '/admin/formations' => [[['_route' => 'admin.formations.index', '_controller' => 'App\\Controller\\AdminFormationController::index'], null, null, null, false, false, null]],
        '/admin/formations/ajout' => [[['_route' => 'admin.formations.new', '_controller' => 'App\\Controller\\AdminFormationController::new'], null, null, null, false, false, null]],
        '/admin/playlists' => [[['_route' => 'admin.playlists.index', '_controller' => 'App\\Controller\\AdminPlaylistController::index'], null, null, null, false, false, null]],
        '/admin/playlists/ajout' => [[['_route' => 'admin.playlists.new', '_controller' => 'App\\Controller\\AdminPlaylistController::new'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/playlists' => [[['_route' => 'playlists', '_controller' => 'App\\Controller\\PlaylistsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|categories/([^/]++)/supprimer(*:241)'
                    .'|formations/([^/]++)/(?'
                        .'|modifier(*:280)'
                        .'|supprimer(*:297)'
                    .')'
                    .'|playlists/([^/]++)/(?'
                        .'|modifier(*:336)'
                        .'|supprimer(*:353)'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|tri/([^/]++)/([^/]++)(?:/([^/]++))?(*:413)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:453)'
                    .'|formation/([^/]++)(*:479)'
                .')'
                .'|/playlists/(?'
                    .'|tri/([^/]++)/([^/]++)(*:523)'
                    .'|recherche/([^/]++)(?:/([^/]++))?(*:563)'
                    .'|playlist/([^/]++)(*:588)'
                .')'
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
        241 => [[['_route' => 'admin.categories.delete', '_controller' => 'App\\Controller\\AdminCategorieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        280 => [[['_route' => 'admin.formations.edit', '_controller' => 'App\\Controller\\AdminFormationController::edit'], ['id'], null, null, false, false, null]],
        297 => [[['_route' => 'admin.formations.delete', '_controller' => 'App\\Controller\\AdminFormationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        336 => [[['_route' => 'admin.playlists.edit', '_controller' => 'App\\Controller\\AdminPlaylistController::edit'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'admin.playlists.delete', '_controller' => 'App\\Controller\\AdminPlaylistController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        413 => [[['_route' => 'formations.sort', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre', 'table'], null, null, false, true, null]],
        453 => [[['_route' => 'formations.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        479 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        523 => [[['_route' => 'playlists.sort', '_controller' => 'App\\Controller\\PlaylistsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        563 => [[['_route' => 'playlists.findallcontain', 'table' => '', '_controller' => 'App\\Controller\\PlaylistsController::findAllContain'], ['champ', 'table'], null, null, false, true, null]],
        588 => [
            [['_route' => 'playlists.showone', '_controller' => 'App\\Controller\\PlaylistsController::showOne'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
