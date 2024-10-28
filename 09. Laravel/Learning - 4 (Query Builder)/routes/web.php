<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get( '/1', [DemoController::class, 'index'] );
Route::get( '/2', [DemoController::class, 'gettingFirstRowOnly'] );
Route::get( '/3', [DemoController::class, 'gettingDataBasedOnId'] );
Route::get( '/4', [DemoController::class, 'gettingDataOfAnySpecificColumn'] );
Route::get( '/5', [DemoController::class, 'aggregates'] );
Route::get( '/6', [DemoController::class, 'selectClause'] );
Route::get( '/7', [DemoController::class, 'distinctSelectClause'] );
Route::get( '/8', [DemoController::class, 'innerJoin'] );
Route::get( '/9', [DemoController::class, 'leftJoin'] );
Route::get( '/10', [DemoController::class, 'rightJoin'] );
Route::get( '/11', [DemoController::class, 'crossJoin'] );
Route::get( '/12', [DemoController::class, 'advancedJoin'] );
Route::get( '/13', [DemoController::class, 'union'] );
Route::get( '/14', [DemoController::class, 'whereClause'] );
Route::get( '/15', [DemoController::class, 'orderByClause'] );
Route::get( '/16', [DemoController::class, 'latest'] );
Route::get( '/17', [DemoController::class, 'oldest'] );
Route::get( '/18', [DemoController::class, 'skipAndTake'] );
Route::get( '/19', [DemoController::class, 'groupByAndHaving'] );
Route::get( '/20', [DemoController::class, 'insertMethodHardCoded'] );
Route::post( '/21', [DemoController::class, 'insertMethodFromRequestBodyAllAtOnce'] );
Route::post( '/22', [DemoController::class, 'insertMethodFromRequestBodyOneByOne'] );
Route::get( '/23', [DemoController::class, 'updateMethodHardCoded'] );
Route::get( '/24/{id}', [DemoController::class, 'updateMethodPickIdFromUrlParameter'] );
Route::put( '/25/{id}', [DemoController::class, 'updateMethodFromRequestBodyAllAtOnce'] );
Route::put( '/26/{id}', [DemoController::class, 'updateMethodFromRequestBodyOneByOne'] );
Route::post( '/27/{id}', [DemoController::class, 'updateOrInsertMethod'] );
Route::post( '/28/{id}', [DemoController::class, 'incrementMethod'] );
Route::post( '/29/{id}', [DemoController::class, 'decrementMethod'] );
Route::delete( '/30/{id}', [DemoController::class, 'deleteMethod'] );
