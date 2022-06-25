<?php

use App\Http\Controllers\apartmentcontroller;
use App\Http\Controllers\societycontroller;
use App\Http\Controllers\flatcontroller;
use App\Http\Controllers\ownerscontroller;
use App\Http\Controllers\tenantscontroller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\AddAnnotatedClassesToCachePass;

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/apartment', [apartmentcontroller::class, 'viewapartment'])->name('apartment');
    Route::get('/addapartment', [apartmentcontroller::class, 'addapartment'])->name('addapartment');
    Route::post('/addapartment', [apartmentcontroller::class, 'store']);
    Route::get('/editapartment/{id}', [apartmentcontroller::class, 'edit'])->name('editapartment');
    Route::post('/editapartment/{id}', [apartmentcontroller::class, 'update'])->name('updateapartment');
    Route::get('/deleteapartment/{id}', [apartmentcontroller::class, 'delete'])->name('deleteapartment');


    Route::get('/flat', [flatcontroller::class, 'viewflat'])->name('flat');
    Route::get('/addflat', [flatcontroller::class, 'addflat'])->name('addflat');
    Route::post('/addflat', [flatcontroller::class, 'store']);
    Route::get('/editflat/{id}', [flatcontroller::class, 'edit'])->name('editflat');
    Route::post('/editflat/{id}', [flatcontroller::class, 'update'])->name('updateflat');
    Route::get('/deleteflat/{id}', [flatcontroller::class, 'delete'])->name('deleteflat');

    Route::get('/owners', [ownerscontroller::class, 'viewowners'])->name('owners');
    Route::get('/addowners', [ownerscontroller::class, 'addowners'])->name('addowners');
    Route::post('/addowners', [ownerscontroller::class, 'store']);
    Route::get('/editowners/{id}', [ownerscontroller::class, 'edit'])->name('editowners');
    Route::post('/editowners/{id}', [ownerscontroller::class, 'update'])->name('updateowners');
    Route::get('/deleteowners/{id}', [ownerscontroller::class, 'delete'])->name('deleteowners');

    Route::get('/tenants', [tenantscontroller::class, 'viewtenants'])->name('tenants');
    Route::get('/addtenants', [tenantscontroller::class, 'addtenants'])->name('addtenants');
    Route::post('/addtenants', [tenantscontroller::class, 'store']);
    Route::get('/edittenants/{id}', [tenantscontroller::class, 'edit'])->name('edittenants');
    Route::post('/edittenants/{id}', [tenantscontroller::class, 'update'])->name('updatetenants');
    Route::get('/deletetenants/{id}', [tenantscontroller::class, 'delete'])->name('deletetenants');

    Route::get('/society', [societycontroller::class, 'viewsociety'])->name('society');
    Route::get('/addsociety', [societycontroller::class, 'addsociety'])->name('addsociety');
    Route::post('/addsociety', [societycontroller::class, 'store']);
    Route::get('/editsociety/{id}', [societycontroller::class, 'edit'])->name('editsociety');
    Route::post('/editsociety/{id}', [societycontroller::class, 'update'])->name('updatesociety');
    Route::get('/deletesociety/{id}', [societycontroller::class, 'delete'])->name('deletesociety');
});



require __DIR__.'/auth.php';
