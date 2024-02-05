<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if(auth()->check()){
        return redirect()->route('home');
    }else{
        return view('auth.login');
    }
});

Auth::routes(['register' => false]);

Route::get('/aniversarios', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/plantilla', [App\Http\Controllers\PlantillaController::class, 'index'])->name('plantilla');
Route::get('/birthday', [App\Http\Controllers\BirthdayController::class, 'index'])->name('birthday');

Route::post('/file-import-birthday', [BirthdayController::class, 'import'])->name('file-import-birthday');
Route::get('/send-birthday', [BirthdayController::class, 'send'])->name('send-birthday');
Route::post('/file-import-anniversary', [HomeController::class, 'import'])->name('file-import-anniversary');
Route::get('/send-anniversary', [HomeController::class, 'send'])->name('send-anniversary');
// Route::get('/test', [BirthdayController::class, 'test']);
