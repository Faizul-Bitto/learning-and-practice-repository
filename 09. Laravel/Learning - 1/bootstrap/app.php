<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure( basePath: dirname( __DIR__ ) )
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware( function ( Middleware $middleware ) {
        $middleware->validateCsrfTokens( except: [
            '*',
        ] );

        // $middleware->group( 'demoMiddleware', [
        //     DemoMiddleware::class,
        // ] );
        $middleware->alias( [
            'demoMiddleware' => DemoMiddleware::class,
        ] );

        $middleware->web( append: [
            // 'demoMiddleware' => DemoMiddleware::class,
            'throttle:10,1',
        ] );

        // $middleware->api( prepend: [
        //     'demoMiddleware' => DemoMiddleware::class,
        //     'throttle:5,1',
        // ] );

    } )
    ->withExceptions( function ( Exceptions $exceptions ) {
        //
    } )->create();
