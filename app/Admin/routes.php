<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resources([
        'aspiration' => AspirationController::class,
        'agenda' => AgendaController::class,
        'acara' => EventController::class,
        'informasi' => InformationController::class,
        'pkm' => PkmController::class,
        'prestasi' => AchievementController::class,
        'sdg' => SdgController::class,
        'agrianita' => AgrianitaController::class,
        'news' => NewsController::class
    ]);
});
