<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
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
        $slider = Slider::all();

        return view('admin.slider.manage')->with(['slider' => $slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slideradd = new Slider();
        $slideradd->slider_link = $request->slider_link;
        //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/images/slider', $filename);
              $slideradd->image = $filename;
        }

        $slideradd->position = $request->position;
        $slideradd->save();
        $notification = array(
                'message' => 'Slider Image Created Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/slider')->with($notification);
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
        $slider = Slider::where('id',$id)->first();
        return view('admin.slider.update')->with(['slider' => $slider]);
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
        $slider = Slider::find($request->slider_id); //form id 
        $slider->slider_link = $request->slider_link;
        //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/images/slider', $filename);
              $slider->image = $filename;
        }

        $slider->position = $request->position;
        $slider->save();
        $notification = array(
                'message' => 'Slider Image Updated Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/slider')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($request->id);
        $slider->delete();
        $notification = array(
                'message' => 'Slider Image Deleted Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/slider')->with($notification);
    }
}
