<?php

namespace App\Http\Controllers;
use App\Product;
use App\Supplier;
use App\Category;
use App\Tax;
use App\Unit;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        $category = Category::all();
        $taxes = Tax::all();
        $units = Unit::all();
    	return view('admin.product.create', get_defined_vars());
    }

    public function save(Request $request){
    	$product = new Product();
    	$product->product_name = $request->product_name;
    	$product->category_id = $request->category_id;
    	$product->unit_id = $request->unit;
    	$product->tax = $request->tax;
    	$product->serial_number = $request->serial_no;
    	$product->model = $request->model;
    	$product->sale_price = $request->price;
	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $product->image = $filename;
        }

    	$product->supplier_id = $request->supplier_id;
    	$product->supplier_price = $request->supplier_price;
    	$product->details = $request->description;
    	$product->save();
    return redirect('/admin/product/add')->with('message','Product added Successfully.');

    }

    public function manage(){

    	$product = DB::table('products')
            ->join('suppliers', 'suppliers.id', '=', 'products.supplier_id')
            ->select('products.*', 'suppliers.supplier_name')
            ->get();
    	return view('admin.product.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $suppliers = Supplier::all();
        $category = Category::all();
        $taxes = Tax::all();
        $units = Unit::all();
        $product = Product::where('id',$id)->first();
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
        $product->unit_id = $request->unit;
        $product->tax = $request->tax;
        $product->serial_number = $request->serial_no;
        $product->model = $request->model;
        $product->sale_price = $request->price;
    //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $product->image = $filename;
        }

        $product->supplier_id = $request->supplier_id;
        $product->supplier_price = $request->supplier_price;
        $product->details = $request->description;
        $product->save();

        return redirect('/admin/product/manage')->with('message','Product Updated Successfully.');   
    }
}
