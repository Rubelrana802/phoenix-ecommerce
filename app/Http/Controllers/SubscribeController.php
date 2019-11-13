<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use DB;
use Illuminate\Support\Facades\Validator;
class SubscribeController extends Controller
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
        $subscribe = DB::table('subscribes')->get();

        return view('admin.websetting.subscribe-list')->with(['subscribe' => $subscribe]);
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
        $validatedData = $request->validate([
        'email' => ['required', 'string', 'email', 'max:255', 'unique:subscribes'],
        ]);

        $subscribe = new Subscribe();
        $subscribe->ip = $request->ip();
        $subscribe->email = $request->email;
        $subscribe->save();
        $notification = array(
                'message' => 'Subscriber Successfully!',
                'alert-type' => 'success',

                'message' => 'Already Subscribe!',
                'alert-type' => 'error'
            );
        return redirect('/')->with($notification);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscribe = Subscribe::find($request->id);
        $subscribe->delete();
        $notification = array(
                'message' => 'Subscriber Email Deleted Successfully!',
                'alert-type' => 'success');
        return redirect('admin.websetting.subscribe-list')->with($notification);
    }


    
}
