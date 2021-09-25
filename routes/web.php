<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

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


Route::get('/', HomeController::class);

Route::get('produtos', [CategoryController::class, 'index']);
Route::get('produtos/{slug}', [CategoryController::class, 'show']);

Route::get('blog', BlogController::class);

Route::view('sobre', 'site.about.index');

Route::get('contato', [ContactController::class, 'index']);
Route::post('contato', [ContactController::class, 'send']);