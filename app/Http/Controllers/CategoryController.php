<?php

namespace App\Http\Controllers;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.category.manage')->with(['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::where('parent_id', '=', 0)->get();
        return view('admin.category.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoryadd = new Category();
        $categoryadd->name = $request->category_name;
        $categoryadd->parent_id = $request->parent_id;

        //cat_favicon upload
        if($request->hasfile('cat_favicon')) 
            { 
              $file = $request->file('cat_favicon');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/category/images/', $filename);
              $categoryadd->icon = $filename;
        }
        
        //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/category/images/', $filename);
              $categoryadd->image = $filename;
        }
        $categoryadd->status = 1;
        $categoryadd->save();

        $notification = array(
                'message' => 'Category Create Successfully!',
                'alert-type' => 'success');
        
        return redirect('/admin/category')->with($notification); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        $categorys = Category::where('parent_id', '=', 0)->get();
        return view('admin.category.update', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($request->category_id); //form id 
        $category->name = $request->input('category_name');
        $category->parent_id = $request->input('parent_id');
        $category->status = $request->input('status');
        $category->save();

        return redirect('/admin/category')->with('message','Category Updated Successfully.');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       
        $category = Category::find($request->id);
        $category->delete();

        return redirect('/admin/category')->with('message','Category Deteted Successfully');
    }

}
