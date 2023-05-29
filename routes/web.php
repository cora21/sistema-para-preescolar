<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Sessioncontroller;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Contactocontroller;
use App\Http\Controllers\IncriController;
use App\Http\Controllers\Maestracontroller;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::get('/register', [Registercontroller::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [Registercontroller::class, 'store'])
->name('register.store');

Route::get('/login', [Sessioncontroller::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [Sessioncontroller::class, 'store'])
->name('login.store');

Route::get('/logout', [Sessioncontroller::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

Route::get('/admin', [Admincontroller::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('contact', [ContactoController::class, 'index'])
->middleware('auth.admin')
->name('contact.index');

Route::get('/inscripciones', [IncriController::class, 'index'])
->middleware('auth.admin')
->name('inscripciones.index');

Route::post('/inscripciones', [IncriController::class, 'store'])
->middleware('auth.admin')
->name('inscripciones.store');

Route::get('/edit', [IncriController::class, 'edit'])
->middleware('auth.admin')
->name('edit');

Route::get('maestra', [MaestraController::class, 'store'])
->middleware('auth.admin')
->name('maestra.store');

Route::get('maestra', [MaestraController::class, 'index'])
->middleware('auth.admin')
->name('maestra.index');

Route::resource('maestra', MaestraController::class);

Route::resource('incrip', IncriController::class);

