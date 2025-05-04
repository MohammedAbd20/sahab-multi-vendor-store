<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CardValidationController;
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

Route::get('/', "App\Http\Controllers\indexController@indexPage")->name("index-page");


Route::get('/login', "App\Http\Controllers\LoginController@loginPage");
Route::post('/login', "App\Http\Controllers\LoginController@storeLogin")->name("store-login");
Route::post('/logout', "App\Http\Controllers\LoginController@logout");

Route::get('/register', "App\Http\Controllers\RegisterController@registerPage");
Route::post('/register', "App\Http\Controllers\RegisterController@newRegister");


Route::get('/profile', "App\Http\Controllers\profileController@profilePage");
Route::post('/profile', 'App\Http\Controllers\profileController@updateProfile');

Route::get('/product/{id}', "App\Http\Controllers\indexController@productPage");
Route::get('/cart', "App\Http\Controllers\indexController@cartPage");
Route::get('/search', "App\Http\Controllers\indexController@searchPage");
Route::get('/supplier/{id}', "App\Http\Controllers\indexController@supplierPage");
Route::get('/categories', "App\Http\Controllers\indexController@categoriesPage");
Route::get('/wishlist', "App\Http\Controllers\indexController@wishlistPage");
Route::get('/recycle-bin', "App\Http\Controllers\indexController@recycleBinPage");
Route::get('/forget-password', "App\Http\Controllers\indexController@forgetPassPage");


Route::get('/change-password', "App\Http\Controllers\changePasswordController@changePassword");
Route::post('/change-password', "App\Http\Controllers\changePasswordController@updatePassword");



Route::get('/valid-cards', [CardController::class, 'checkValidCards']);



