<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GridController;

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
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/37be3fea99244c1133eb29aab50c0768', [GridController::class, 'index'])->name('grid');

// Route::get('/44ee65052d63ffa2a11e917c6327ca91', [GridController::class, 'index'])->name('grid2');
// Route::get('/b574fcd56d2c08e700c5c9db33a1c58c', [GridController::class, 'index'])->name('grid3');
// Route::get('/facbf3e5cdf97590c4edb177b4148405', [GridController::class, 'index'])->name('grid4');
// Route::get('/d07fe97541d6da8e4ee3368c9c782bf6', [GridController::class, 'index'])->name('grid5');
// Route::get('/8274281b6f909119ad5eb0fbf2b25f22', [GridController::class, 'index'])->name('grid6');
// Route::get('/8405ccfb0eb4fe8fe977b1f86179407e', [GridController::class, 'index'])->name('grid7');