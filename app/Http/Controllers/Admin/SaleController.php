<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetails;
use DB;

class SaleController extends Controller
{
    public function indexSale(Request $request)
    {
    	$saleList = DB::table('orders') -> leftjoin('order_details', 'orders.id' ,'=', 'order_details.order_id') -> leftjoin('products', 'products.id', '=', 'order_details.product_id') ->leftjoin('order_status', 'orders.status_id','=','order_status.id')

    	 -> select('order_status.name as order_status_name','products.id as product_id','products.name as product_name', DB::raw('sum(order_details.quantity) as sale_quantity'),'order_details.price as product_price')
    		-> groupBy('products.id','order_status.name','products.id','products.name','order_details.price')
 		   	 -> where([
            ['orders.is_deleted', '=', '0'],
            ['order_status.name', '=', 'Hoàn Thành'],
       		 ])
    		->get();

    	 return view('admin.sale.index')->with([
            'saleList' => $saleList,
        ]);	
    }
}
