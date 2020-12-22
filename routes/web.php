<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as CMs;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [CMs\PageController::class, 'index']);

Route::get('/profile', [CMs\PageController::class, 'profile']);



Route::get('/edit-profile', [CMs\PageController::class, 'editProfile']);
Route::post('/upload-pic', [CMs\PageController::class, 'uploadPic']);
Route::post('/update-profile', [CMs\PageController::class, 'updateProfile']);



require __DIR__.'/auth.php';
