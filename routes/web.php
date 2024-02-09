<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;



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

// this is the main route
Route::get('/', function () {
    return view('welcome');
});

// this is the route of dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// this is the middleware (used for authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// App Routes
Route::middleware('auth')->group(function(){
Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/{id}/edit',[ProductController::class,'edit']);
Route::put('products/{id}/update',[ProductController::class,'update']);
Route::get('products/{id}/delete',[ProductController::class,'destory']);
Route::get('products/{id}/show',[ProductController::class,'show']);
//Route::post('', [CommentController::class,'store'])->name('comments.store');


Route::post('products/comment/store',[CommentController::class,'store'])->name('products.comment.store');
Route::resource('comments',CommentController::class)->only(['store','update','destory']);

Route::delete('/comments/{id}', [CommentController::class,'destory'])->name('comments.destory');


});

require __DIR__.'/auth.php';
