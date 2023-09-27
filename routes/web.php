<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterAndLoginController;
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
    return view('main.registerpage');
});

Route::get('home', [MainController::class, 'home']);
Route::get('codequest', [MainController::class, 'codequest']);
Route::get('news', [MainController::class, 'news']);
Route::get('about', [MainController::class, 'about']);



Route::get('/registerpage', [RegisterAndLoginController::class, 'registerpage']);
Route::get('/loginpage', function () {
    return view('main.loginpage');
});
Route::get('/student-num-exists',[RegisterAndLoginController::class,'studentNumExists']);
Route::post('/register',[RegisterAndLoginController::class,'register']);