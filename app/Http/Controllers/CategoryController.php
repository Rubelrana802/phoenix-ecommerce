<?php

namespace App\Http\Controllers;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$category = Category::all();
        $category = DB::table('categories')->paginate(5);

        return view('admin.category.manage')->with(['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
        return view('admin.category.update')->with(['category' => $category]);
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
