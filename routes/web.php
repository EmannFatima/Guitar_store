<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('about.index');

Route::resource('guitars', NewController::class);

// Route::get('/about', function () {
//     return "about page";
// });
// Route::get('/store', function () {
//     $category = request("category");
//     return "Youre viewing the store " . $category;
// });
Route::get('/store/{category}', function ($category, ) {
    $category = request("category");
    return "Youre viewing the store " . $category;
});
