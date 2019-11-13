<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
    	return view('admin.store.create');
    }

    public function save(Request $request){
    	$store = new Store();
    	$store->store_name = $request->store_name; 
    	$store->mobile = $request->mobile; 
    	$store->address = $request->address; 
    	$store->status = 1; 
    	$store->save();
    return redirect('/admin/store/manage')->with('message','Store create Successfully');
    }

    public function manage(){
    	$stores = Store::all();
    	return view('admin.store.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $store = Store::where('id',$id)->first();
        return view('admin.store.update')->with(['store' => $store]);
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
        $store = Store::find($request->store_id); //form id 
        $store->store_name = $request->store_name; 
    	$store->mobile = $request->mobile; 
    	$store->address = $request->address; 
    	$store->save();

        return redirect('/admin/store/manage')->with('message','Store Updated Successfully.');   
    }
}
