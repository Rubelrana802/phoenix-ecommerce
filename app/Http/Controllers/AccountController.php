<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountController extends Controller
{

	public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
    	return view('admin.account.create');
    }

    public function save(Request $request){
    	$account = new Account();
    	$account->account_name = $request->account_name; 
    	$account->account_type = $request->account_type; 
    	$account->save();

    	$notification = array(
                'message' => 'Category Create Successfully!',
                'alert-type' => 'success');
    return redirect('/admin/account/manage')->with($notification);
    }

    public function manage(){
    	$account = Account::all();
    	return view('admin.account.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $account = Account::where('id',$id)->first();
        return view('admin.account.update')->with(['account' => $account]);
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
        $account = Account::find($request->account_id); //form id 
        $account->account_name = $request->account_name; 
    	$account->save();

        return redirect('/admin/account/manage')->with('message','Store Updated Successfully.');   
    }
}
