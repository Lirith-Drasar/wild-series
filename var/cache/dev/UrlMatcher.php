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
        '/actor' => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actor/new' => [[['_route' => 'actor_new', '_controller' => 'App\\Controller\\ActorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/program' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/program/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/wild' => [[['_route' => 'wild_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null]],
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
                .'|/actor/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/comment/([^/]++)(?'
                    .'|(*:237)'
                    .'|/edit(*:250)'
                    .'|(*:258)'
                .')'
                .'|/episode/([^/]++)(?'
                    .'|(*:287)'
                    .'|/edit(*:300)'
                    .'|(*:308)'
                .')'
                .'|/program/([^/]++)(?'
                    .'|(*:337)'
                    .'|/edit(*:350)'
                    .'|(*:358)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:386)'
                    .'|/edit(*:399)'
                    .'|(*:407)'
                .')'
                .'|/wild/(?'
                    .'|s(?'
                        .'|how(?:/([a-z0-9-]+))?(*:450)'
                        .'|eason/([0-9]+)(*:472)'
                    .')'
                    .'|category(?:/([a-z]+))?(*:503)'
                    .'|program(?:/([a-z0-9-]+))?(*:536)'
                    .'|episode/([^/]++)(*:560)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'actor_edit', '_controller' => 'App\\Controller\\ActorController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'actor_delete', '_controller' => 'App\\Controller\\ActorController::delete'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        287 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        337 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        386 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        450 => [[['_route' => 'wild_show', 'slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug'], null, null, false, true, null]],
        472 => [[['_route' => 'show_season', '_controller' => 'App\\Controller\\WildController::showBySeason'], ['seasonId'], null, null, false, true, null]],
        503 => [[['_route' => 'show_category', 'categoryName' => null, '_controller' => 'App\\Controller\\WildController::showByCategory'], ['categoryName'], null, null, false, true, null]],
        536 => [[['_route' => 'show_program', 'programName' => null, '_controller' => 'App\\Controller\\WildController::showByProgram'], ['programName'], null, null, false, true, null]],
        560 => [
            [['_route' => 'show_episode', '_controller' => 'App\\Controller\\WildController::showByEpisode'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
