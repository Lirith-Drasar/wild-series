<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'category' => [[], ['_controller' => 'App\\Controller\\CategoryController::add'], [], [['text', '/category']], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'episode_index' => [[], ['_controller' => 'App\\Controller\\EpisodeController::index'], [], [['text', '/episode/']], [], []],
    'episode_new' => [[], ['_controller' => 'App\\Controller\\EpisodeController::new'], [], [['text', '/episode/new']], [], []],
    'episode_show' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'episode_edit' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'episode_delete' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'program_index' => [[], ['_controller' => 'App\\Controller\\ProgramController::index'], [], [['text', '/program/']], [], []],
    'program_new' => [[], ['_controller' => 'App\\Controller\\ProgramController::new'], [], [['text', '/program/new']], [], []],
    'program_show' => [['id'], ['_controller' => 'App\\Controller\\ProgramController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/program']], [], []],
    'program_edit' => [['id'], ['_controller' => 'App\\Controller\\ProgramController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/program']], [], []],
    'program_delete' => [['id'], ['_controller' => 'App\\Controller\\ProgramController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/program']], [], []],
    'season_index' => [[], ['_controller' => 'App\\Controller\\SeasonController::index'], [], [['text', '/season/']], [], []],
    'season_new' => [[], ['_controller' => 'App\\Controller\\SeasonController::new'], [], [['text', '/season/new']], [], []],
    'season_show' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'season_edit' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'season_delete' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'wild_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/wild']], [], []],
    'wild_show' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug' => '[a-z0-9-]+'], [['variable', '/', '[a-z0-9-]+', 'slug', true], ['text', '/wild/show']], [], []],
    'show_category' => [['categoryName'], ['categoryName' => null, '_controller' => 'App\\Controller\\WildController::showByCategory'], ['categoryName' => '[a-z]+'], [['variable', '/', '[a-z]+', 'categoryName', true], ['text', '/wild/category']], [], []],
    'show_program' => [['programName'], ['programName' => null, '_controller' => 'App\\Controller\\WildController::showByProgram'], ['programName' => '[a-z0-9-]+'], [['variable', '/', '[a-z0-9-]+', 'programName', true], ['text', '/wild/program']], [], []],
    'show_season' => [['seasonId'], ['_controller' => 'App\\Controller\\WildController::showBySeason'], ['seasonId' => '[0-9]+'], [['variable', '/', '[0-9]+', 'seasonId', true], ['text', '/wild/season']], [], []],
    'show_episode' => [['id'], ['_controller' => 'App\\Controller\\WildController::showByEpisode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/wild/episode']], [], []],
];
