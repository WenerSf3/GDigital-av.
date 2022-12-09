<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RedirectController;

use App\Http\Controllers\LinksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Links

Route::get('/link', [LinksController::class, 'index']);

Route::post('/link', [LinksController::class, 'store']);

Route::put('/link/{link}', [LinksController::class, 'update']);

Route::delete('/link/{link}', [LinksController::class, 'destroy']);


// redirect

Route::get('/redirect', [RedirectController::class, 'index']);

Route::post('/redirect', [RedirectController::class, 'store']);

Route::put('/redirect/{redirect}', [RedirectController::class, 'update']);

Route::delete('/redirect/{redirect}', [RedirectController::class, 'destroy']);