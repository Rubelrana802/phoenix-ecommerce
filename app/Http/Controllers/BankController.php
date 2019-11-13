<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Bank_transaction;
use App\Websetting;
use DB;

class BankController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
    	return view('admin.bank.create');
    }

    public function save(Request $request){
    	$bank = new Bank();
    	$bank->bank_name = $request->bank_name; 
    	$bank->account_name = $request->ac_name; 
    	$bank->account_number = $request->ac_no; 
    	$bank->branch = $request->branch;
    //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $bank->image = $filename;
        }
    	
    	$bank->save();
    return redirect('/admin/bank/manage')->with('message','Bank create Successfully');
    }

    public function manage(){
        $websetting = Websetting::first();
    	$banks = bank::all();

    	return view('admin.bank.manage', get_defined_vars());
    }

        public function edit($id)
    {
        $bank = Bank::where('id',$id)->first();
        return view('admin.bank.update')->with(['bank' => $bank]);
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
        $bank = bank::find($request->bank_id); //form id 
        $bank->bank_name = $request->bank_name; 
    	$bank->account_name = $request->ac_name; 
    	$bank->account_number = $request->ac_no; 
    	$bank->branch = $request->branch;
    //image upload
        if($request->hasfile('image')) 
            { 
              $file = $request->file('image');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $bank->image = $filename;
        }
    	
    	$bank->save();

        return redirect('/admin/bank/manage')->with('message','Bank Updated Successfully.');   
    }

    public function transaction(){
    	$banks = bank::all();
    	return view('admin.bank.transaction', get_defined_vars());
    }

    public function transactionsave( Request $request){
    	$transaction = new Bank_transaction();
    	$transaction->bank_id = $request->bank_id;
    	$transaction->details = $request->description;
    	$transaction->deposite_id = $request->withdraw_deposite_id;
    	$transaction->date = $request->date;
    	$transaction->ac_type = $request->account_type;

    	if($transaction->ac_type == 1){
    		$transaction->dr = $request->ammount;
    		$transaction->ac_type = 'Debit+';

    	}else if($transaction->ac_type == 2){
    		$transaction->cr = $request->ammount;
    		$transaction->ac_type = 'Credit-';
    	}
    	
    	$transaction->ammount = $request->ammount;
    	$transaction->save();
    return redirect('/admin/bank/manage')->with('message','Bank Transaction Successfully.');   
    }


    //Bank ladger report
    public function bankledger($id){

        $websetting = Websetting::first();
    	$bank = Bank::where('id',$id)->first();
        $banks = Bank::all();
    	$transactions = DB::table('banks')
            ->join('bank_transactions', 'banks.id', '=', 'bank_transactions.bank_id')
            ->select('banks.*', 'bank_transactions.*')
            ->where('bank_id', $id)
            ->get();
        

        $debit = DB::table('bank_transactions')
                ->select(DB::raw('SUM(dr) as debit'))
                ->where('bank_id', $id)
                ->first();

        $credit = DB::table('bank_transactions')
                ->select(DB::raw('SUM(cr) as credit'))
                ->where('bank_id', $id)
                ->first();

    	return view('admin.bank.bankledger', get_defined_vars());
    }


    


}
