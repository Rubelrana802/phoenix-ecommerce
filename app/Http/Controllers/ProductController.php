<?php

namespace App\Http\Controllers;
use App\Product;
use App\Supplier;
use App\Category;
use App\Tax;
use App\Unit;
use App\Brand;
use App\Websetting;
use Session;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
        $suppliers = Supplier::all();
        //$category = Category::all();
        $taxes = Tax::all();
        $units = Unit::all();
        $brands = Brand::all();

      $categories = Category::where(['parent_id' => 0])->get();
      $categories_drop_down = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
          $categories_drop_down .= "<option value='".$cat->id."'>".$cat->name."</option>";
          $sub_categories = Category::where(['parent_id' => $cat->id])->get();
          foreach($sub_categories as $sub_cat){
            $categories_drop_down .= "<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";  
          } 
        }

    	return view('admin.product.create', get_defined_vars());
    }



    public function save(Request $request){
    	$product = new Product();
    	$product->product_name = $request->product_name;
    	$product->category_id = $request->category_id;
    	$product->unit_id = $request->unit_id;
      $product->brand_id = $request->brand_id;
    	$product->serial_number = $request->serial_no;
    	$product->model = $request->model;
      $product->tag = $request->tag;
      $product->type = $request->type;
    	$product->best_sale = $request->best_sale;
      $product->offer = $request->onsale;
      $product->offer_price = $request->offer_price;
      $product->sale_price = $request->sale_price;
      $product->supplier_price = $request->supplier_price;
      $product->details = $request->description;

	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $product->image = $filename;
        }

        $notification = array(
                'message' => 'Product Create Successfully!',
                'alert-type' => 'success');
        
    	
    	$product->save();
    return redirect('/admin/product/manage')->with($notification);

    }

    public function manage(){

      $websetting = Websetting::first();

    	$product = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->join('units', 'units.id', '=', 'products.unit_id')
                ->select('products.*', 'categories.name', 'units.unit_name')
                ->get();
    	return view('admin.product.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $suppliers = Supplier::all();
        $category = Category::all();
        $taxes = Tax::all();
        $units = Unit::all();
        $brands = Brand::all();
        $product = Product::where('id',$id)->first();

        $categories = Category::where(['parent_id' => 0])->get();
        $categories_drop_down = "<option value='' selected disabled>Select</option>";
          foreach($categories as $cat){
            $categories_drop_down .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach($sub_categories as $sub_cat){
              $categories_drop_down .= "<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";  
            } 
          }

        return view('admin.product.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->product_id); //form id 
        $product->product_name = $request->product_name;
      $product->category_id = $request->category_id;
      $product->unit_id = $request->unit_id;
      $product->brand_id = $request->brand_id;
      $product->serial_number = $request->serial_no;
      $product->model = $request->model;
      $product->tag = $request->tag;
      $product->type = $request->type;
      $product->best_sale = $request->best_sale;
      $product->offer = $request->onsale;
      $product->offer_price = $request->offer_price;
      $product->sale_price = $request->sale_price;
      $product->supplier_price = $request->supplier_price;
      $product->details = $request->description;

  //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $product->image = $filename;
        }

        $notification = array(
                'message' => 'Product Update Successfully!',
                'alert-type' => 'success');
        
      
      $product->save();

        return redirect('/admin/product/manage')->with($notification);   
    }
}
