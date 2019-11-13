<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Category;
use DB;
class DefaultController extends Controller
{
    public function index(){

      $bestsale = DB::table('invoice_details')
           ->leftJoin('products','products.id','=','invoice_details.product_id')
           ->select('products.id','products.product_name','invoice_details.product_id',
                DB::raw('SUM(invoice_details.quantity) as total'))
           ->groupBy('products.id','invoice_details.product_id','products.product_name')
           ->orderBy('total','desc')
           ->limit(6)
           ->get();

      $product = DB::table('products')
                 ->join('categories', 'products.category_id', 'categories.id')
                 ->select('products.*', 'categories.name')
                 ->orderBy('id', 'asc')
                 ->get();

      $newproduct = DB::table('products')
                 ->join('categories', 'products.category_id', 'categories.id')
                 ->select('products.*', 'categories.name')
                 ->orderBy('id', 'desc')
                 ->take(20)
                 ->get();


      $discoutproduct = DB::table('products')                        
                        ->join('categories', 'products.category_id', 'categories.id')
                        ->select('products.*', 'categories.name')
                        ->where('offer', '=', 1)
                        ->get();

    	$slider = Slider::where('position', '=', 1)->get();
    	return view('web.home.homeContent', get_defined_vars());
    }

    

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('products')
        ->where('product_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->product_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }


    public function contact(){
    	return view('web.common.contact');
    }

    public function about(){
    	return view('web.common.about');
    }
}
