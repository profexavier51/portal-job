<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Candidate Dashboard Routes
route::group(
    [
        'middleware' => ['auth', 'verified', 'use.role:candidate'],
        'prefix'=>'candidate',
        'as' => 'candidate.'
    ],
    function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
// Company Dashboard Routes
route::group(
    [
        'middleware' => ['auth', 'verified', 'use.role:company'],
        'prefix'=>'company',
        'as' => 'company.'
    ],
    function(){
    Route::get('/dashboard', function () {
        return view('frontend.company-dashboard.dashboard');
    })->name('dashboard');

});


