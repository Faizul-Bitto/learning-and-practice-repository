<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get( '/1', [DemoController::class, 'dataGet'] );
Route::get( '/2', [DemoController::class, 'dataGetCategories'] );
Route::get( '/3', [DemoController::class, 'dataGetProducts'] );
Route::post( '/4', [DemoController::class, 'insertDataAllAtOnce'] );
Route::post( '/5', [DemoController::class, 'insertMultipleDataAllAtOnce'] );
Route::put( '/5/{id}', [DemoController::class, 'dataUpdate'] );
Route::delete( '/6/{id}', [DemoController::class, 'dataDelete'] );
