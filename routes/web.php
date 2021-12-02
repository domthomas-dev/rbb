<?php

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
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::name(config('codenco-faster.back_prefix_name'))->prefix(config('codenco-faster.back_prefix_path'))->middleware(['auth'])->group(function (){
    Route::get('/teams', \App\Http\Livewire\Admin\Teams\TeamTable::class)->name('teams.index');
});
Route::name(config('codenco-faster.back_prefix_name'))->prefix(config('codenco-faster.back_prefix_path'))->middleware(['auth'])->group(function (){
    Route::get('/teams/create', \App\Http\Livewire\Admin\Teams\TeamForm::class)->name('teams.create');
    Route::get('/teams/{id}/edit', \App\Http\Livewire\Admin\Teams\TeamForm::class)->name('teams.edit');
});

