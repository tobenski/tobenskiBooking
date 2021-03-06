<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Settings;
use App\View\Components\Settings\Profile;
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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', Dashboard::class )->name('home');
    Route::get('/settings/{page?}', Settings::class)->name('settings');
});
