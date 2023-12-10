<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisonController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazillaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BloodGroupController;
use App\Http\Controllers\PostofficeController;


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
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resources([
    'users' => UserController::class,
    'roles' => RoleController::class,
    'bloodgroups' => BloodGroupController::class,
    'divisions' => DivisonController::class,
    'districts' => DistrictController::class,
    'upazillas' => UpazillaController::class,
    'pso' => PostofficeController::class,
    'profiles' => ProfileController::class,
]);
