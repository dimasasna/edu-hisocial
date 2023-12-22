<?php

use App\Http\Controllers\ShowPortofolio;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;

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


Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/portofolio', [ShowPortofolio::class,'index']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::get('/register', [RegisterController::class,'index'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class,'store']);
Route::delete('/register/{user}', [RegisterController::class,'destroy']);

Route::resource('/dashboard/category', CategoryController::class)->middleware('auth');

Route::resource('/dashboard/portfolio', PortfolioController::class)->middleware('auth');

Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact Us',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});

Route::get('/service', function () {
    return view('service',[
        'title' => 'Service',
        'logo' => 'assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/media-social-management', function () {
    return view('media-social-management',[
        'title' => 'Media Social Management',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/digital-marketing', function () {
    return view('digital-marketing',[
        'title' => 'Digital Marketing',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/logo-branding-identity', function () {
    return view('logo-branding-identity',[
        'title' => 'Logo Branding Identity',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/branding-identity-visual', function () {
    return view('branding-identity-visual',[
        'title' => 'Branding Identity Visual',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});
Route::get('/service/website-system-service', function () {
    return view('website-system-service',[
        'title' => 'Website & System Service',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});

Route::fallback(function () {
    return view('errors.404',[
        'title' => '404',
        'logo' => '../assets/img/logo-hisocial.png'
    ]);
});
