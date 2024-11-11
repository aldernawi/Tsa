<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\departmentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\researchesController;
use App\Http\Controllers\UserController;
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
Route::get('/search', [HomeController::class, 'search'])->name('search');
route::get('/',[HomeController::class,'index'])->name('main');
route::get('/explore/{id}',[HomeController::class,'explore'])->name('department.explore');
route::get('/researche/{id}',[HomeController::class,'show'])->name('researche.show');
Route::get('/ownresearch', [HomeController::class, 'ownresearch'])->name('ownresearch');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::get('/home',[AdminController::class,'index'])->name('home'); 
Route::get('/researches/create',[HomeController::class,'create'])->name('researche.create');
route::get('/app',[HomeController::class,'app'])->name('app');
Route::post('/researches',[HomeController::class,'store'])->name('researche.store' );
Route::get('/researches/edit/{id}',[HomeController::class,'edit'])->name('researche.edit');
Route::put('/researches/{id}',[HomeController::class,'update'])->name('researche.update');
route::get('/researche/{id}',[HomeController::class,'show'])->name('researche.show');
Route::delete('/researches/delete/{id}',[HomeController::class,'destroy'])->name('researche.destroy');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/user/create',[UserController::class,'create'])->name('admin.create');
Route::post('/user',[UserController::class,'store'])->name('user.store');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/{id}',[UserController::class,'update'])->name('user.update');
Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('user.destroy');


//departments
Route::get('/departments',[departmentsController::class,'index'])->name('departments');
Route::get('/department/create',[departmentsController::class,'create'])->name('department.create');
Route::post('/department',[departmentsController::class,'Store'])->name('department.store');
Route::get('/department/edit/{id}',[departmentsController::class,'edit'])->name('department.edit');
Route::put('/department/{id}',[departmentsController::class,'update'])->name('department.update');
Route::delete('/department/delete/{id}',[departmentsController::class,'destroy'])->name('department.destroy');

//researches
Route::get('/researches', [researchesController::class, 'index'])->name('researches');
Route::post('/researche', [researchesController::class, 'save'])->name('researches.save');
Route::post('/research/approve/{id}', [researchesController::class, 'approve'])->name('research.approve');
Route::post('/research/reject/{id}', [researchesController::class, 'reject'])->name('research.reject');

});

