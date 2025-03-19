<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormController;

// Example of group middleware with throttle

Route::middleware( 'throttle:5,1' )->group( function ()
{
    Route::get( 'demo/', [DemoController::class, 'setSession'] );
    Route::get( 'demo2/', [DemoController::class, 'getSession'] );
    Route::get( 'demo3/', [DemoController::class, 'readAgain'] );
    Route::get( 'demo4/', [DemoController::class, 'readInView'] );
    Route::get( 'demo5/', [DemoController::class, 'updateSession'] );
    Route::get( 'demo6/', [DemoController::class, 'destroySession'] );

    Route::get( 'demo7/', [DemoController::class, 'setSessionFLashMessage'] );
    Route::get( 'demo8/', [DemoController::class, 'getSessionFlashMessage'] );
    Route::get( 'demo9/', [DemoController::class, 'flash'] );

    Route::get( '/viewForm', [FormController::class, 'viewForm'] );
    Route::post( '/submitForm', [FormController::class, 'submitForm'] )->name( 'submitForm' );
} );
