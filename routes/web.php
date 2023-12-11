<?php

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


Auth::routes();

//Route::get('/', App\Http\Controllers\HomeController::class)->name('main.index')->middleware('auth');//, 'index']);//->name('home');
//Route::get('/bus', [App\Http\Controllers\BusSortController::class, 'testsort'])->name('bus');
//Route::get('/main', App\Http\Controllers\Main\IndexController::class)->name('main.index')->middleware('auth');
Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('main.index')->middleware('auth');

Route::prefix('towns')->middleware('auth')->group(function (){
//Route::group(['prefix'=>'towns'],function(){
    Route::get('/', App\Http\Controllers\Town\IndexController::class)->name('town.index');
    Route::get('/create', App\Http\Controllers\Town\CreateController::class)->name('town.create');
    Route::post('/', App\Http\Controllers\Town\StoreController::class)->name('town.store');
    Route::get('/{town}/edit', App\Http\Controllers\Town\EditController::class)->name('town.edit');
    Route::get('/{town}', App\Http\Controllers\Town\ShowController::class)->name('town.show');
    Route::patch('/{town}', App\Http\Controllers\Town\UpdateController::class)->name('town.update');
    Route::delete('/{town}', App\Http\Controllers\Town\DeleteController::class)->name('town.delete');
});



//Route::group(['prefix'=>'clinics'],function(){
Route::prefix('clinics')->middleware('auth')->group(function (){
    Route::get('/', App\Http\Controllers\clinic\IndexController::class)->name('clinic.index');
    Route::get('/create', App\Http\Controllers\Clinic\CreateController::class)->name('clinic.create');
    Route::post('/', App\Http\Controllers\Clinic\StoreController::class)->name('clinic.store');
    Route::get('/{clinic}/edit', App\Http\Controllers\Clinic\EditController::class)->name('clinic.edit');
    Route::get('/{clinic}', App\Http\Controllers\Clinic\ShowController::class)->name('clinic.show');
    Route::patch('/{clinic}', App\Http\Controllers\Clinic\UpdateController::class)->name('clinic.update');
    Route::delete('/{clinic}', App\Http\Controllers\Clinic\DeleteController::class)->name('clinic.delete');
});

//Route::group(['prefix'=>'user'],function(){
Route::prefix('user')->middleware('auth')->group(function (){    
    Route::get('/', App\Http\Controllers\user\IndexController::class)->name('user.index');
    Route::get('/create', App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});





/*
Route::group(['prefix'=>'customers'],function(){
    Route::get('/', App\Http\Controllers\Customer\IndexController::class)->name('customer.index');
    Route::get('/create', App\Http\Controllers\Customer\CreateController::class)->name('customer.create');
    Route::post('/', App\Http\Controllers\Customer\StoreController::class)->name('customer.store');
    Route::get('/{customer}/edit', App\Http\Controllers\Customer\EditController::class)->name('customer.edit');
    Route::get('/{customer}', App\Http\Controllers\Customer\ShowController::class)->name('customer.show');
    Route::patch('/{customer}', App\Http\Controllers\Customer\UpdateController::class)->name('customer.update');
    Route::delete('/{customer}', App\Http\Controllers\Customer\DeleteController::class)->name('customer.delete');
});
*/