<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TravelController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);

});

// Agent Authentication Routes
Route::prefix('agent')->group(function () {
    Route::get('login', [AgentController::class, 'loginForm'])->name('agent.login');
    Route::post('login', [AgentController::class, 'login']);

});

// Admin Routes
Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    // Add other admin routes as needed

});

// Agent Routes
Route::prefix('agent')->middleware(['auth:agent'])->group(function () {
    Route::get('dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
    Route::post('logout', [AgentController::class, 'logout'])->name('agent.logout');
    // Add other agent routes as needed

});


//Resource CRUD routes
Route::resource('terminals', TerminalController::class);
Route::resource('routes', RouteController::class);
Route::resource('buses', BusController::class);
Route::resource('travels', TravelController::class);
Route::resource('tickets', TicketController::class);
Route::resource('passengers', PassengerController::class);
Route::resource('drivers', DriverController::class);
Route::resource('conductors', ConductorController::class);
