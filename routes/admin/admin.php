<?php

//Test
Route::group(['prefix' => '/admin'], function () {
	Route::get('/test', function () {
		return view('admin.layouts.master');
	});

	Route::group(['prefix' => '/category'], function () {
		Route::get('/index', [App\Http\Controllers\Admin\AdminController::class , 'categoryIndex'])->name('category_index');
	});
	
});