<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarqueController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.show');

Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('dashboard',[DashboardController::class ,'showDash'])->name('dashboard');

//////////////////////BARQUE 
Route::resource('barque',App\Http\Controllers\BarqueController::class);
/*
// returns the home page with all posts
Route::get('/barque', BarqueController::class .'@index')->name('barque.index');
// returns the form for adding a post
Route::get('/barque/create', BarqueController::class . '@create')->name('barque.create');
// adds a post to the database
Route::post('/barque', BarqueController::class .'@store')->name('barque.store');
// returns a page that shows a full post
Route::get('/barque/{post}', BarqueController::class .'@show')->name('barque.show');
// returns the form for editing a post
Route::get('/barque/{post}/edit', BarqueController::class .'@edit')->name('barque.edit');
// updates a post
Route::put('/barque/{post}', BarqueController::class .'@update')->name('barque.update');
// deletes a post
Route::delete('/barque/{post}', BarqueController::class .'@destroy')->name('barque.destroy');

Route::get('/print/{ID_BARQUE}', BarqueController::class .'@print')->name('barque.print');
*/
Route::get('/generate-pdf/{ID_BARQUE}', BarqueController::class.'@generatePDF')->name('barque.pdf');
