<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserBackendController;
use App\Http\Controllers\ParentBackendController;
use App\Http\Controllers\PetBackendController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetTypeBackendController;
use App\Http\Controllers\AdoptionAppBackendController;
use App\Http\Controllers\AdoptionAppController;
use App\Http\Controllers\BeritaBackendController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Models\adoptionApp;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\petParent;

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
    return view('adoptapaw.home');
});

Route::get('/home', function(){
    return view('adoptapaw.home');
});

Route::get('/about', function(){
    return view('adoptapaw.about');
});

Route::get('/contact', function(){
    return view('adoptapaw.contact');
});

Route::resource('adoption_app', AdoptionAppController::class);
Route::resource('berita', BeritaController::class);

Route::get('/register', function(){
    return view('register');
});

Route::get('/pet', function(){
    return view('adoptapaw.pet',['pets' => Pet::paginate(10)]);
});

//backend
/* Route::get('/backend', function () {
    return view('backend.index');
}); */

/* Route::get('/backend', function () {
    return view('backend.index');
})->middleware('auth'); */

Route::resource('backend', DashboardController::class)->middleware('auth');
Route::resource('user-backend', UserBackendController::class)->middleware('admin');
Route::resource('parent-backend', ParentBackendController::class)->middleware('auth');;
Route::resource('pet-backend', PetBackendController::class)->middleware('auth');;
Route::resource('pet_type-backend', PetTypeBackendController::class)->middleware('auth');;
Route::resource('adoption_app-backend', AdoptionAppBackendController::class)->middleware('auth');;
Route::resource('berita-backend', BeritaBackendController::class)->middleware('admin');

Route::get('/pet/{id}', [PetController::class,'show'],['pets'=> Pet::all()]);

Route::get('/adoption/{id}', [AdoptionAppController::class,'toShow']);

Route::get('/berita/{id}', [BeritaController::class,'show']);

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'register']);



