<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CustomAuthController;

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

Route::prefix('admin')->group(function () {
    Route::get('/registration', [CustomAuthController::class, 'registration']);
    Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::get('/login', [CustomAuthController::class, 'login']);
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/add_advertisement', [CustomAuthController::class, 'advertisement']);
Route::post('/register-add', [CustomAuthController::class, 'registeradd'])->name('register-add');
Route::get('/view-add', [CustomAuthController::class, 'view_add']);

});



Route::prefix('user')->group(function () {
    Route::get('/user-login', [CustomAuthController::class, 'userlogin']);
    Route::post('/User-Login', [CustomAuthController::class, 'userlogin'])->name('user-login');
    Route::get('/user_add_advertisement', [CustomAuthController::class, 'useradvertisement']);
    });
    


Route::get('/resizeImage', [ImageController::class, 'resizeImage']);
Route::post('/resizeImagePost',[ImageController::class, 'resizeImagePost'])->name('resizeImagePost');
