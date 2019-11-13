<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Bank;
use App\Customer_payment;
use App\Websetting;
use DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){
    	return view('admin.customer.create');
    }

    public function save(Request $request){
    	$customer = new Customer();
    	$customer->customer_name = $request->customer_name; 
    	$customer->email = $request->email; 
    	$customer->mobile = $request->mobile; 
    	$customer->address = $request->address; 
    	$customer->previous_due = $request->previous_balance; 
    	$customer->save();
    return redirect('/admin/customer/add')->with('message','Customer create Successfully');
    }

    public function manage(){
    	$customers = Customer::all();
    	return view('admin.customer.manage', get_defined_vars());
    }

    public function edit($id)
    {
        $customer = Customer::where('id',$id)->first();
        return view('admin.customer.update')->with(['customer' => $customer]);
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
        $customer = Customer::find($request->customer_id); //form id 
        $customer->customer_name = $request->customer_name; 
    	$customer->email = $request->email; 
    	$customer->mobile = $request->mobile; 
    	$customer->address = $request->address; 
    	$customer->previous_due = $request->previous_balance; 
    	$customer->save();

        return redirect('/admin/customer/manage')->with('message','Customer Updated Successfully.');   
    }



    public function customerpayment(){
        
        $customers = Customer::all();
        $banks = Bank::all();

        return view('admin.customer.customer-payment', get_defined_vars());
    }

    public function paymentsubmit(Request $request){
        $customerPayment = new Customer_payment();
        $customerPayment->payment_total =  $request->grand_total_price ;
        $customerPayment->customer_id =  $request->customer_id;
        $customerPayment->date = $request->date;
        $customerPayment->type = 1; // 1 mean customer debit  by return
        $customerPayment->payment_by = $request->payment_type;
        $customerPayment->bank_id = $request->bank_id;
        $customerPayment->detaits = $request->detaits;
        $customerPayment->save();

        $notification = array(
                'message' => 'Customer Payment Received!',
                'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }


//customer sigle ledger
    public function ledgerdate($id){

        $customers = Customer::all();
        $customer = Customer::where('id',$id)->first();
        $websetting = Websetting::all();

        $payment = DB::table('customers')
            ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
            ->select('customers.*', 'customer_payments.*')
            ->where('customer_id', '=', $id)
            ->get(); 
        


        $totalInvoice = DB::table('customers')
                        ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
                        ->select('customers.*', 'customer_payments.*')
                        ->where('customer_id', '=', $id)
                        ->where('type',1)
                        ->sum('payment_total');

        $received = DB::table('customers')
                        ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
                        ->select('customers.*', 'customer_payments.*')
                        ->where('customer_id', '=', $id)
                        ->where('type',2)
                        ->sum('payment_total');

        return view('admin.customer.customer-ledger-single', get_defined_vars());
    }

    public function ledgersearch(Request $request){

        $validatedData = $request->validate([
            'customer_id' => 'required',

        ]);

        $customers = Customer::all();

        $customer = Customer::where('id',$request->customer_id)->first();

        $websetting = Websetting::first();

        $totalInvoice = DB::table('customers')
                        ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
                        ->select('customers.*', 'customer_payments.*')
                        ->where('customer_id', '=', $request->customer_id)
                        ->where('type',1)
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->sum('payment_total');

        $received = DB::table('customers')
                        ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
                        ->select('customers.*', 'customer_payments.*')
                        ->where('customer_id', '=', $request->customer_id)
                        ->where('type',2)
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->sum('payment_total');


        if(!empty($request->from_date))
          {
            $payment = DB::table('customers')
                        ->join('customer_payments', 'customers.id', '=', 'customer_payments.customer_id')
                        ->select('customers.*', 'customer_payments.*')
                        ->where('customer_id', '=', $request->customer_id)
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->get();
        }

        return view('admin.customer.customer-ledger-single', get_defined_vars()); 
    }



// all customer ledger
    public function customerledger(){

        $payment = Customer_payment::get();

        $customers = Customer::all();
        $websetting = Websetting::all();

        $totalInvoice = DB::table('customer_payments')->where('type',1)->sum('payment_total');

        $received = DB::table('customer_payments')->where('type',2)->sum('payment_total');

        return view('admin.customer.customer-ledger', get_defined_vars());
    }



    public function paidcustomer(){
        
        $paidcustomer = DB::table('customers')
                        ->join('invoice_wise', 'customers.id', '=', 'invoice_wise.customer_id')
                        ->select('invoice_wise.*', 'customers.*')
                        ->whereIn('payment_type', [1,3])
                        ->get();
        return view('admin.customer.paid-customer', get_defined_vars());
    }

    public function creditcustomer(){
        $customers = DB::table('customers')
                    ->join('invoice_wise', 'customers.id', '=', 'invoice_wise.customer_id')
                    ->select('invoice_wise.*', 'customers.*')
                    ->where('payment_type', 2)
                    ->get();

        return view('admin.customer.credit-customer', get_defined_vars());  
    }
}
