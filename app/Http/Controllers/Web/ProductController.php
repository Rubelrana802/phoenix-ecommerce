<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
use App\Category;
use App\Unit;
class ProductController extends Controller
{

    public function singleproduct($id){

    	$products = DB::table('products')
                    ->join('categories', 'products.category_id', 'categories.id')
                    ->select('products.*', 'categories.name')
                    ->where('products.id', $id)
                    ->take(10)
                    ->get();



		$similar_product = DB::table('products')
                 ->join('categories', 'products.category_id', 'categories.id')
                 ->select('products.*', 'categories.*')
				->where('id', '!=', $products->id)
			    ->where(function ($query) use ($products) {
			        $query->where('category_id', '=', $products->category_id);
			    })->get();

    	return view('web.product.single-product', get_defined_vars());
    }

     public function shopproduct(){
    	return view('web.product.shop-product');
    }


}
