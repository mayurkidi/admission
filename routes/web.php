<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddCourseController;
use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ForgotPassword;

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

Route::group(['middleware' => 'auth', 'verified'], function () {
    // Route::get('/',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::view('profile', 'user.profile')->name('user.profile');
    Route::resource('user', UserController::class);
    // Route::view('dashboard','dashboard')->name('dashboard');
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('admin', [HomeController::class, 'index'])->name('admin');

    Route::get('test', [QuizController::class, 'index'])->name('test');
    // Route::view('test','test')->name('test');
    Route::get('addcourse', [AddCourseController::class, 'index'])->name('stu.addcousrse');
    Route::Post('addcourse/store', [AddCourseController::class, 'store'])->name('app.store');
    Route::Post('test', [QuizController::class, 'save_quiz'])->name('save_quiz');
    // Route::post('fetch-states', [DropdownController::class, 'fetchState']);
    // Route::post('fetch-cities', [DropdownController::class, 'fetchCity']);  
    
});
Route::post('reset_password_without_token', 'App\Http\Controllers\ForgotPassword@validatePasswordRequest');
Route::post('reset_password_with_token', 'App\Http\Controllers\ForgotPassword@resetPassword');

Route::get('/getcity', [ApiController::class, 'getCityList']);
Route::get('/getcourse', [ApiController::class, 'getCourseList']);
Route::get('/isapproved', [ApiController::class, 'isApproved']);
Route::post('/uploadoc', [ApiController::class, 'UploadOC'])->name('uploadoc');
Route::get('generate-pdf', 'App\Http\Controllers\PDFController@generatePDF')->name('generate-pdf');
Route::view('admitcard', 'admitcard')->name('admitcard');
Route::view('forgotpassword','auth.passwords.email')->name('auth.passwords.email');



Auth::routes(['verify' => true]);
