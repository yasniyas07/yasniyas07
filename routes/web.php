<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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

Route::get('home', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('ihza', [HomeController::class, 'ihza']);
Route::get('yuyun', [HomeController::class, 'yuyun']);
Route::get('index', [HomeController::class, 'produk']);
Route::resource("/student", StudentController::class);

Route::get('/login', [AuthController::class, 'index'])->name('auth.login');

Route::get('/', function () {
    return redirect(route('auth.login'));
});

?>
