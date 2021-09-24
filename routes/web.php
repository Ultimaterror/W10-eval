<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DrawerController;

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
    return view('index');
});

Route::get('personnages/creer', [CharacterController::class, 'create']);
Route::get('personnages/{personnage}/modifier', [CharacterController::class, 'edit']);
Route::resource('personnages', CharacterController::class)->except(['edit', 'create']);

Route::get('dessinateurs/creer', [DrawerController::class, 'create']);
Route::get('dessinateurs/{dessinateur}/modifier', [DrawerController::class, 'edit']);
Route::resource('dessinateurs', DrawerController::class)->except(['edit', 'create']);