<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_gallery;
use DB;
class ProductGalleryController extends Controller
{
  public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
        	$product = Product::all();
    	return view('admin.gallery.create', get_defined_vars());
    }

    public function save(Request $request){
    	$Product_gallery = new Product_gallery();
    	$Product_gallery->product_id = $request->product_id; 

    	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $Product_gallery->image = $filename;
        }
    	$Product_gallery->save();
    	
    	$notification = array(
                'message' => 'Gallery Created Successfully!',
                'alert-type' => 'success');

        return redirect('/admin/gallery/manage')->with($notification); 
    }

    public function manage(){
    	$gallery = DB::table('product_galleries')
    				->join('products', 'product_galleries.product_id', 'products.id')
    				->select('products.product_name', 'product_galleries.*')
    				->get();
    	return view('admin.gallery.manage', get_defined_vars());
    }

    public function edit($id)
    {
    	$product = Product::all();
        $product_gallery = Product_gallery::where('id',$id)->first();
        return view('admin.gallery.update', get_defined_vars());
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
        $product_gallery = Product_gallery::find($request->product_gallery_id); //form id 

    	$product_gallery->product_id = $request->product_id; 

    	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $product_gallery->image = $filename;
        }

        $product_gallery->save();
        $notification = array(
                'message' => 'Gallery Updated Successfully!',
                'alert-type' => 'success');

        return redirect('/admin/gallery/manage')->with($notification);   
    }
}
