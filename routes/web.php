<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/sign_up', [MainController::class, 'sign_up']);

Route::post('/sign_up/insert', [MainController::class, 'create']);

Route::get('/main', [MainController::class, 'show1']);

Route::get('/select', [MainController::class, 'show2']);

Route::get('/update/{custno}', [MainController::class, 'update_page']);

Route::post('/update/member', [MainController::class, 'update']);
