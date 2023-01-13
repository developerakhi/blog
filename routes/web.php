<?php

use App\Http\Controllers\Backend\BackEndController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontand\FrontandController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TagController;
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


    Route::get('/sub-category/create',  [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::post('/sub-category-store',  [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::get('/sub-category',  [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/sub-category/show/{id}',   [SubCategoryController::class, 'show'])->name('sub-category.show');
    Route::get('/sub-category/edit/{id}',   [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}',   [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::delete('/sub-category/destroy/{id}',   [SubCategoryController::class, 'destroy'])->name('sub-category.destroy');



    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag-store', [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag',        [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/show/{id}',   [TagController::class, 'show'])->name('tag.show');
    Route::get('/tag/edit/{id}',   [TagController::class, 'edit'])->name('tag.edit');
    Route::post('/tag/update/{id}',   [TagController::class, 'update'])->name('tag.update');
    Route::delete('/tag/destroy/{id}',   [TagController::class, 'destroy'])->name('tag.destroy');


    

    

});


require __DIR__.'/auth.php';
