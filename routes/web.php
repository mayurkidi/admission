<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\API\ApiController;

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

Route::group(['middleware'=>'auth','verified'], function () {
    Route::get('/',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::view('profile','user.profile')->name('user.profile');
    Route::resource('user', UserController::class);
    Route::view('dashboard','dashboard')->name('dashboard');
    Route::get('addcourse', [AddCourseController::class, 'index'])->name('stu.addcousrse');
    Route::Post('addcourse/store', [AddCourseController::class, 'store'])->name('app.store');
    // Route::post('fetch-states', [DropdownController::class, 'fetchState']);
    // Route::post('fetch-cities', [DropdownController::class, 'fetchCity']);  
});
    Route::get('/getcity', [ApiController::class,'getCityList']);

Auth::routes(['verify' => true]);

