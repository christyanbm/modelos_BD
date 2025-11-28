<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\TareaController;
use App\Models\Tarea;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tarea', [TareaController::class, 'index'])->name('tarea.index');
Route::get('/tarea/create', [TareaController::class, 'create'])->name('tarea.create');
Route::post('/tarea/store', [TareaController::class, 'store'])->name('tarea.store');
Route::get('/tarea/edit/{id}', [TareaController::class, 'edit'])->name('tarea.edit');
Route::put('/tarea/update/{id}', [TareaController::class, 'update'])->name('tarea.update');
route::delete('/tarea/destroy/{id}', [TareaController::class, 'destroy'])->name('tarea.destroy');
route::get('/tarea/show/{id}', [TareaController::class, 'show'])->name('tarea.show');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
