<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{

  public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){

    	return view('admin.brand.create');
    }

    public function save(Request $request){
    	$brand = new Brand();
    	$brand->brand_name = $request->brand_name;
    	$brand->website = $request->website;
	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/brand/images/', $filename);
              $brand->image = $filename;
        }
    	$brand->save();

    	$notification = array(
                'message' => 'Brand Create Successfully!',
                'alert-type' => 'success');
    return redirect('/admin/brand/manage')->with($notification);

    }

    public function manage(){

    	$brands = Brand::all();
    	return view('admin.brand.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $brands = Brand::where('id',$id)->first();
        return view('admin.brand.update', get_defined_vars());
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
        $brand = Brand::find($request->brand_id); //form id 
    	$brand->brand_name = $request->brand_name;
    	$brand->website = $request->website;
	//image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/brand/images/', $filename);
              $brand->image = $filename;
        }

        $brand->save();

        $notification = array(
                'message' => 'Brand Updated Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/brand/manage')->with($notification);   
    }
}
