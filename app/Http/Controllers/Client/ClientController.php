<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class ClientController extends Controller
{
    //Index
    public function index(Request $request)
    {
        //Lấy ra danh sách bố
        $categoryP = DB::table('categories')
        ->where('parent_id',0)
        ->get();

        //Lấy ra danh sách con
        $categoryC = DB::table('categories')
        ->where('parent_id','<>',0)
        ->get();

        //Lấy ra sản phẩm đã được sắp xếp theo thứ tự giảm dần của quantity_sale + leftjoin bảng category để lấy parent_id
        $productList = DB::table('products')
        ->orderBy('quantity_sale','DESC')
        ->leftJoin('categories','products.category_id','=','categories.id')
        ->select('products.*','categories.parent_id')
        ->get();

        $productListTime =[];
        //Lấy ra sản phẩm đã được sắp xếp theo thứ tự gần nhất của time của + leftjoin bảng category để lấy parent_id
        foreach ($productList as $product) {
            if (time() - strtotime($product->created_at) < 2*24*60*60 ) {
                $productListTime[] = $product;
            }
        }
        return view('client.index.index')->with([
            'categoryP' => $categoryP,
            'categoryC' => $categoryC,
            'productList' => $productList,
            'productListTime' => $productListTime,
            'count' => 0,
            'idCategory' => ''
        ]);
    }

    //Product
    public function product(Request $request)
    {
        $idCategory = $request->idCategory;
        $search = $request->s;
        $price_level = $request->price_level;

        //Lấy ra danh sách bố
        $categoryP = DB::table('categories')
        ->where('parent_id',0)
        ->get();

        //Lấy ra danh sách con
        $categoryC = DB::table('categories')
        ->where('parent_id','<>',0)
        ->get();


        if (isset($idCategory) && $idCategory > 0) {
            //Lay ra category theo id truyen vao
            $category = DB::table('categories')
            ->where('id',$idCategory)
            ->get();

            //Lay ten cua category do
            $title = $category[0]->name;
            
            //Neu price_level ton tai
            if(isset($price_level) && $price_level>0){
                //Neu la category cha
                if ($category[0]->parent_id == 0) {
                    $productList = DB::table('products')
                    ->leftJoin('categories','products.category_id','=','categories.id')
                    ->where('categories.parent_id',$idCategory)
                    ->where('products.name','like','%'.$search.'%')
                    ->where('price_level',$price_level)
                    ->select('products.*')
                    ->paginate(3);
                }else{
                    //Neu la category con
                    $productList = DB::table('products')
                    ->where('category_id',$idCategory)
                    ->where('name','like','%'.$search.'%')
                    ->where('price_level',$price_level)
                    ->paginate(3);
                }
            }else{
                //Neu la category cha
                if ($category[0]->parent_id == 0) {
                    $productList = DB::table('products')
                    ->leftJoin('categories','products.category_id','=','categories.id')
                    ->where('categories.parent_id',$idCategory)
                    ->where('products.name','like','%'.$search.'%')
                    ->select('products.*')
                    ->paginate(3);
                }else{
                    //Neu la category con
                    $productList = DB::table('products')
                    ->where('category_id',$idCategory)
                    ->where('name','like','%'.$search.'%')
                    ->paginate(3);
                }
            }
            //San pham hot
            if ($category[0]->parent_id == 0) {
                //Neu la category bo
                $productListHot = DB::table('products')
                ->leftJoin('categories','products.category_id','=','categories.id')
                ->where('categories.parent_id',$idCategory)
                ->select('products.*')
                ->orderBy('quantity_sale','DESC')
                ->limit(3)
                ->get();
            }else{
                //Neu la category con
                $productListHot = DB::table('products')
                ->where('category_id',$idCategory)
                ->orderBy('quantity_sale','DESC')
                ->limit(3)
                ->get();
            }
        }else{
            //neu price_level ton tai
            if (isset($price_level) && $price_level > 0) {
                //Đổ ra full sản phẩm theo search
                $title = "Sản phẩm";
                $productList = DB::table('products')
                ->where('name','like','%'.$search.'%')
                ->where('price_level',$price_level)
                ->paginate(3);
            }else{
                //Đổ ra full sản phẩm theo search
                $title = "Sản phẩm";
                $productList = DB::table('products')
                ->where('name','like','%'.$search.'%')
                ->paginate(3);
            }
            //San pham hot
            $productListHot = DB::table('products')
            ->orderBy('quantity_sale','DESC')
            ->limit(3)
            ->get();
        }
        return view('client.product.product')->with([
            'categoryP' => $categoryP,
            'categoryC' => $categoryC,
            'idCategory' => $idCategory,
            'productList' => $productList,
            'title' => $title,
            'search' => $search,
            'productListHot' => $productListHot,
            'price_level' => $price_level
        ]);
        
    }

    //Single
    public function single(Request $request)
    {
        return view('client.single.single');
    }

    //Checkout
    public function checkout(Request $request)
    {
        return view('client.checkout.checkout');
    }

    //Privacy
    public function privacy(Request $request)
    {
        return view('client.privacy.privacy');
    }

    //Payment
    public function payment(Request $request)
    {
        return view('client.payment.payment');
    }

    //Terms
    public function terms(Request $request)
    {
        return view('client.terms.terms');
    }

    //Faqs
    public function faqs(Request $request)
    {
        return view('client.faqs.faqs');
    }

    //Help
    public function help(Request $request)
    {
        return view('client.help.help');
    }
    
    //Contact
    public function contact(Request $request)
    {
        return view('client.contact.contact');
    }
    
    //About
    public function about(Request $request)
    {
        return view('client.about.about');
    }

    //News
    public function news(Request $request)
    {
        return view('client.news.news');
    }
}
