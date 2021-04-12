<?php

declare(strict_types=1);

use App\Controller\SiteController;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Yiisoft\Router\Route;

return [
    Route::get('/')->action([SiteController::class, 'index'])->name('home'),
    Route::get('/app/public/auth')->action(\Yiisoft\Yii\AuthClient\AuthAction::class)->name('auth')
];
