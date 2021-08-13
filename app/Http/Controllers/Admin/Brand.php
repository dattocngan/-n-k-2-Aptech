<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Brand;
use DB;

class ProductController extends Controller
{
	public function createProduct(Request $request) {
		$categoryParentList = Category::where([
		    ['is_deleted', '=', '0'],
		    ['parent_id', '=', '0'],
		])->get();

		$brandList = Brand::where([
		    ['is_deleted', '=', '0'],
		])->get();


		return view('admin.product.create')->with([
			'categoryParentList' => $categoryParentList,
			'brandList' => $brandList,
		]);
	}

	//Lay category child qua ajax
	public function getCategoryChild(Request $request) {
		$id = $request->id;

		$categoryChildList = Category::where([
		    ['parent_id', '=', $id],
		    ['is_deleted', '=', '0'],
		])->get();

		return json_encode($categoryChildList);
	}

	//AJAX- Upload ảnh vào folder khi thả ảnh vào khung summernote, trả về đường link
	public function sendFile(Request $request) {

		if ($request->hasFile('file')) {  

			$file = $request->file('file');  

			$typefile = $file->getClientOriginalExtension();

			if ($typefile == 'jpg' || $typefile == 'png' || $typefile == 'jpeg') {

                $filename = time().'_'.$file->getClientOriginalName(); //Dat  lai ten cho file

                while (file_exists($filename)) {
					$filename = time().'_'.$file->getClientOriginalName();
				}

          		$file->move('project/images/products/descreption/',$filename); //move file ve thu muc 
          		$res = [
          			'url'=> "project/images/products/descreption/".$filename,
          			'message' => 'success',
          		];
     		}else{
      		$res = [
          			'url'=> null,
          			'message' => 'Chọn lại file ảnh định dạng jpg, png, jpeg',
          		  ];
     		 }

      	return json_encode($res);
  		}
	}
}
