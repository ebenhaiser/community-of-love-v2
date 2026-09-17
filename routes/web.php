<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::livewire('/', 'master.users.index')
//     ->name('users.index');
// Route::middleware(['auth'])->group(function () {

// Route::prefix('master')->name('master.')->group(function () {

//     Route::livewire('/users', 'master.users.index')
//         ->name('users.index');

//     Route::livewire('/cools', 'master.cools.index')
//         ->name('cools.index');

//     Route::livewire('/members', 'master.members.index')
//         ->name('members.index');

//     Route::livewire('/event-types', 'master.event-types.index')
//         ->name('event-types.index');

//     Route::livewire('/ref-settings', 'master.ref-settings.index')
//         ->name('ref-settings.index');
// });

Route::get('/', [MasterController::class, 'coolIndex'])
    ->name('master.cools.index');
