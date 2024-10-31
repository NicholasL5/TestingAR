<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreejsController;

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


Route::get('/test/{id}', function($id){
    return view('welcome', ['rid' => $id]);
});

Route::get('/threejs', [ThreejsController::class, 'show']);