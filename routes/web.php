<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use GuzzleHttp\Middleware;

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
    return view('home');
});
Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');

Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

Route::get('/beritaksi', [ProfileController::class, 'beritaksi'])->name('beritaksi');

Route::get('/lulusan', [ProfileController::class, 'lulusan'])->name('lulusan');

Route::get('/dosen', [ProfileController::class, 'dosen'])->name('dosen');

Route::get('/user/home', [LoginRegisterController::class, 'userhome'])->name('user.home');

Route::get('/admin/home', [LoginRegisterController::class, 'adminhome'])->name('admin.home');

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');

Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');

Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout'); 

Route::middleware(['guest'])->group(function () {
    Route::get('/', function (){
        return view('home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminhome'])->name('admin.home');
    Route::post('/postBerita', [BeritaController::class, 'postBerita'])->name('postBerita');
    Route::get('/berita/form', [BeritaController::class, 'showBeritaForm'])->name('berita.form');
    Route::get('/admin/berita', [BeritaController::class, 'berita'])->name('admin.berita');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userhome'])->name('user.home');
    Route::get('/user/berita', [BeritaController::class, 'showberita'])->name('user.berita');
});

Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout'); 
Route::post('/postlogin', [LoginRegisterController::class, 'login'])->name('postlogin'); 
Route::post('/postregister', [LoginRegisterController::class, 'register'])->name('postregister'); 
