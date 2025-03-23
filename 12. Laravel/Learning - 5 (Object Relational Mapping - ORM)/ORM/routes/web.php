<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get( '/1', [DemoController::class, 'dataGet'] );
Route::get( '/2', [DemoController::class, 'dataGetAll'] );
Route::get( '/3', [DemoController::class, 'onlyOneRow'] );
Route::get( '/4', [DemoController::class, 'findMethod'] );
Route::get( '/5', [DemoController::class, 'retrievingListOfColumns'] );
Route::get( '/6', [DemoController::class, 'retrievingListOfColumnsWithKeyDefining'] );
Route::get( '/7', [DemoController::class, 'dataGetCategories'] );
Route::get( '/8', [DemoController::class, 'dataGetProducts'] );
Route::post( '/9', [DemoController::class, 'insertDataAllAtOnce'] );
Route::post( '/10', [DemoController::class, 'insertMultipleDataAllAtOnce'] );
Route::put( '/11/{id}', [DemoController::class, 'dataUpdate'] );
Route::delete( '/12/{id}', [DemoController::class, 'dataDelete'] );
Route::post( '/13/{firstName}', [DemoController::class, 'updateOrCreateMethod'] );
Route::get( '/14/{id}', [DemoController::class, 'incrementMethod'] );
Route::get( '/15/{id}', [DemoController::class, 'decrementMethod'] );
