<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-way', function () {
    return view('my-way');
});

Route::get('/test/lalala/{idAfterSlash}', [TestController::class, 'myFirstMethod']);

Route::get('/cat-meow/{idAfterSlash}', [CatController::class, 'meowMethod']);

Route::get('/HomeNew/{idAfterSlash}', [HomeNewController::class, 'HomeNewMethod']);