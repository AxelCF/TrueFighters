<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Admin;
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

Route::get('/articles', [PostController::class, 'index'])->name('posts.index');

Route::resource('posts', PostController::class)->except('index');

// Route::middleware(['auth'])->group(function (){

//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// });

Route::get('/', [IndexController::class, 'index'])->name('accueil');

Route::get('/twitch', function (){
    return view('stream.twitch');
})->name('twitch');

Route::middleware([
    'admin'
    ])->group(function () {
            Route::get('/admin/user', [AdminController::class, 'users'])->name('admin.user');
            Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
            Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
        
        // Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware([
    'auth:sanctum',
    // 'admin',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
}); 
