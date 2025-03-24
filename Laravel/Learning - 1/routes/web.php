<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\WorkingWithCookiesController;
use App\Http\Controllers\WorkingWithRedirectionController;
use App\Http\Controllers\RequestResponseLearningController;
use App\Http\Controllers\WorkingWithMultipartformdataController;

Route::get( 'demo1/', [DemoController::class, 'demo1'] );
Route::get( 'demo2/', [DemoController::class, 'demo2'] );
Route::get( 'demo3/', [DemoController::class, 'demo3'] );
Route::get( 'demo4/', [DemoController::class, 'demo4'] );
Route::get( 'demo5/', [DemoController::class, 'demo5'] );
Route::get( 'demo6/', [DemoController::class, 'demo6'] );
Route::get( 'demo7/', [DemoController::class, 'demo7'] );
Route::get( 'demo8/', [DemoController::class, 'demo8'] );
Route::get( 'demo9/', action: [DemoController::class, 'demo9'] );
Route::get( 'demo10/', action: [DemoController::class, 'demo10'] );
Route::get( 'demo11/', [DemoController::class, 'demo11'] );

Route::get( 'demo12/{name}/{age}', [RequestResponseLearningController::class, 'demo12'] );
Route::get( 'demo13/', [RequestResponseLearningController::class, 'demo13'] );
Route::get( 'demo14/', [RequestResponseLearningController::class, 'demo14'] );
Route::get( 'demo15/', [RequestResponseLearningController::class, 'demo15'] );
Route::get( 'demo16/', [RequestResponseLearningController::class, 'demo16'] );
Route::get( 'demo17/{id}', [RequestResponseLearningController::class, 'demo17'] );
Route::get( 'demo18/{id}', [RequestResponseLearningController::class, 'demo18'] );
Route::get( 'demo19/{id}/item/{itemId}/title/{titleId}', [RequestResponseLearningController::class, 'demo19'] );
Route::get( 'demo19/{id}/item/{itemId}/title/{titleId}', [RequestResponseLearningController::class, 'demo19'] );
Route::get( 'demo32/', [RequestResponseLearningController::class, 'demo32'] );

Route::post( 'demo20/', [WorkingWithMultipartformdataController::class, 'demo20'] );
Route::post( 'demo21/', [WorkingWithMultipartformdataController::class, 'demo21'] );
Route::post( 'demo22/', [WorkingWithMultipartformdataController::class, 'demo22'] );
Route::post( 'demo23/', [WorkingWithMultipartformdataController::class, 'demo23'] );
Route::post( 'demo24/', [WorkingWithMultipartformdataController::class, 'demo24'] );
Route::post( 'demo25/', [WorkingWithMultipartformdataController::class, 'demo25'] );
Route::post( 'demo26/', [WorkingWithMultipartformdataController::class, 'demo26'] );

Route::get( 'demo27/', [WorkingWithRedirectionController::class, 'demo27'] );
Route::get( 'demo28/', [WorkingWithRedirectionController::class, 'demo28'] );
Route::get( 'demo29/', [WorkingWithRedirectionController::class, 'demo29'] );
Route::get( 'demo30/', [WorkingWithRedirectionController::class, 'demo30'] );

Route::get( 'demo31/', [WorkingWithCookiesController::class, 'demo31'] );

Route::get( 'demo33/', [ViewController::class, 'demo33'] );

Route::get( 'demo34/{num1}/{num2}', [LogController::class, 'demo34'] );

Route::get( 'demo35/{email}', [SessionController::class, 'sessionPut'] );
Route::get( 'demo36/', [SessionController::class, 'sessionPull'] );
Route::get( 'demo37/', [SessionController::class, 'sessionGet'] );
Route::get( 'demo38/', [SessionController::class, 'sessionForget'] );
Route::get( 'demo39/', [SessionController::class, 'sessionFlush'] );

Route::get( 'demo40/{key}', [MiddlewareController::class, 'demo40'] )->middleware( [DemoMiddleware::class] );
// directly declaring the class
Route::middleware( [DemoMiddleware::class] )->group( function ()
{
    Route::get( 'demo41/{key}', [MiddlewareController::class, 'demo41'] );
    Route::get( 'demo42/{key}', [MiddlewareController::class, 'demo42'] );
    Route::get( 'demo43/{key}', [MiddlewareController::class, 'demo43'] );
    Route::get( 'demo44/{key}', [MiddlewareController::class, 'demo44'] );
} );
// using the alias name, after declared the class in the app.php
Route::middleware( ['demoMiddleware'] )->group( function ()
{
    Route::get( 'demo41/{key}', [MiddlewareController::class, 'demo41'] );
    Route::get( 'demo42/{key}', [MiddlewareController::class, 'demo42'] );
    Route::get( 'demo43/{key}', [MiddlewareController::class, 'demo43'] );
    Route::get( 'demo44/{key}', [MiddlewareController::class, 'demo44'] );
} );
Route::get( 'demo45/', [MiddlewareController::class, 'demo45'] )->middleware( [DemoMiddleware::class] );
Route::get( 'demo46/', [MiddlewareController::class, 'demo46'] )->middleware( 'throttle:5,1' );

Route::get( 'demo47/{name}', [BasicController::class, 'demo47'] );

Route::get( 'demo48/{name}', SingleActionController::class );

Route::resource( 'demo49/', ResourceController::class );

Route::get( 'demo50/{key}', [ConstructorController::class, 'demo50'] );
Route::get( 'demo51/', [BladeController::class, 'demo51'] );
