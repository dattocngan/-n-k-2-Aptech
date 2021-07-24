<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
	public function indexCategory(Request $request) {
		$categoryList = Category::paginate(10);

		return view('admin.category.index')->with([
			'categoryList' => $categoryList,
			'count' => 0,
		]);
	}

	public function createCategory(Request $request) {
		return view('admin.category.create');
	}

	public function storeCategory(Request $request) {
    	// $this->validate($request,
    	// 	[
    	// 		'name' => 'required|unique:category|min:3|max:150'
    	// 	],
    	// 	[
    	// 		'name.required' => 'Bạn chưa nhập tên danh mục',
    	// 		'name.unique' => 'Tên danh mục đã tồn tại',
    	// 		'name.min' => 'Tên danh mục phải tối thiểu có 3 ký tự',
    	// 		'name.max' => 'Tên danh mục phải tối đa có 150 ký tự',
    	// 	]);

		$validatedData = $request->validate([
    			'name' => 'required|unique:category|min:3|max:150'
			
		], [
			'name.required' => 'Bạn chưa nhập tên danh mục',
			'name.unique' => 'Tên danh mục đã tồn tại',
			'name.min' => 'Tên danh mục phải tối thiểu có 3 ký tự',
			'name.max' => 'Tên danh mục phải tối đa có 150 ký tự',
		]);

		$category = new Category;
		$category->name = $request->name;
		$category->save();

		return redirect()->route('category_create') -> with([
			'message' => "Đã Thêm Thành Công Danh Mục Mới",
		]);
	}

	public function editCategory(Request $request, $id) {
		$category = Category::find($id);
    	return view('admin.category.edit')->with([
			'category' => $category,
		]);;
	}

	public function updateCategory(Request $request, $id) {
		echo $id;
		// $category = Category::find($id);
		// $category->name = $request->name;
		// $category->save();
  //   	return redirect()->route('category_edit',['id' => $id]) ->with([
  //   		'message' => 'Đã sửa danh mục sản phẩm thành công',
  //   	]);
	}

	public function deleteCategory(Request $request) {
		$id = $request->id;
		$category = Category::find($id);
		$category->delete();
		return "Đã xóa danh mục sản phẩm thành công";
	}

}
