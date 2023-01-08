<?php

use App\Http\Controllers\Backend\BackEndController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontand\FrontandController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FrontandController::class, 'index'])->name('front.index');
Route::get('/single-post', [FrontandController::class, 'index'])->name('front.single');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/', [BackEndController::class, 'index'])->name('back.index');



    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category',        [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/show/{id}',   [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/edit/{id}',   [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',   [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/destroy/{id}',   [CategoryController::class, 'destroy'])->name('category.destroy');

    

});


require __DIR__.'/auth.php';
