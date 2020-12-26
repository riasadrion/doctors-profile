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
Route::post('/search', [CMs\PageController::class, 'search']);
Route::get('/contact', [CMs\PageController::class, 'contact']);
Route::post('/contact-email', [CMs\PageController::class, 'contactEmail']);

Route::resource('posts', CMs\PostController::class);
Route::middleware('auth')->group(function () {
    Route::get('/edit-profile', [CMs\PageController::class, 'editProfile']);
    Route::post('/upload-pic', [CMs\PageController::class, 'uploadPic']);
    Route::post('/upload-logo', [CMs\PageController::class, 'uploadLogo']);
    Route::post('/update-profile', [CMs\PageController::class, 'updateProfile']);
    Route::post('/create-education', [CMs\PageController::class, 'createEducation']);
    Route::delete('/del-edu/{id}', [CMs\PageController::class, 'deleteEducation']);
    Route::post('/create-work', [CMs\PageController::class, 'createWork']);
    Route::delete('/del-work/{id}', [CMs\PageController::class, 'deleteWork']);
    Route::post('/create-skill', [CMs\PageController::class, 'createSkill']);
    Route::delete('/del-skill/{id}', [CMs\PageController::class, 'deleteSkill']);
});



require __DIR__.'/auth.php';
