<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterAndLoginController;
use App\Http\Controllers\SuccessController;
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
    return view('main.loginpage');
});

Route::get('home', [MainController::class, 'home']);
Route::get('codequest', [MainController::class, 'codequest']);
Route::get('news', [MainController::class, 'news']);
Route::get('about', [MainController::class, 'about']);

//Code Quest Routes
Route::get('mpcq', [MainController::class, 'mpcq']);
Route::get('fe', [MainController::class, 'fe']);
Route::get('be', [MainController::class, 'be']);

Route::get('registersuccess',[SuccessController::class,'registersuccess']);

Route::get('/registerpage', [RegisterAndLoginController::class, 'registerpage']);
Route::get('/loginpage', function () {
    return view('main.loginpage');
});
Route::get('/student-num-exists',[RegisterAndLoginController::class,'studentNumExists']);
Route::post('/register',[RegisterAndLoginController::class,'register']);
Route::post('/login',[RegisterAndLoginController::class,'login']);