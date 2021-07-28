<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;


//Category
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'category'], function () {

		Route::get('/index', [CategoryController::class , 'indexCategory'])->name('category_index');

		Route::get('/create', [CategoryController::class , 'createCategory'])->name('category_create');

		Route::post('/store', [CategoryController::class , 'storeCategory'])->name('category_store');
		
		Route::get('/edit/{id}', [CategoryController::class , 'editCategory'])->name('category_edit');
		Route::post('/edit/{id}', [CategoryController::class , 'updateCategory'])->name('category_update');
		
		Route::post('/delete', [CategoryController::class , 'deleteCategory'])->name('category_delete');
	});
});


// News
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'news'], function () {

		Route::get('/index', [NewsController::class , 'indexNews'])->name('news_index');

		Route::get('/create', [NewsController::class , 'createNews'])->name('news_create');

		Route::post('/sendfile', [NewsController::class ,'sendFile'])->name('news_sendfile');

		Route::post('/store', [NewsController::class , 'storeNews'])->name('news_store');

		Route::get('/edit/{id}', [NewsController::class , 'editNews'])->name('news_edit');

		Route::post('/update/{id}', [NewsController::class , 'updateNews'])->name('news_update');

		Route::post('/delete', [NewsController::class , 'deleteNews'])->name('news_delete');
	});
});



