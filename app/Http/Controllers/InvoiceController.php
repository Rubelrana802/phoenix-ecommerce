<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Store;
use App\Bank;
use App\Stock;
use App\Invoice;
use App\Invoice_details;
use Illuminate\Support\Facades\Input;
use PDF;
use App\Customer_payment;
use Config;
use DB;
use App\Websetting;
use App\Company;
class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){

    	$products = Product::all();
        $customers = Customer::all();
        $stores = Store::all();
        $banks = Bank::all();
        $stocks = Stock::first();

       	$lastInvoiceID = Invoice::orderBy('id', 'DESC')->pluck('sell_invoice_no')->first();
        if(empty( $lastInvoiceID)){
            $newInvoiceID = date('ymd').'01';
        }else{
            $newInvoiceID = $lastInvoiceID + 1;
        }

    	return view('admin.invoice.newinvoice', get_defined_vars());
    }

    public function saveinvoice(Request $request){

    	 $inputs = Input::except(['_token','customer_id','payment_type','store_id','status']);
        
        // check product availability 
        if(empty($request->store_id)){
            for($i = 0 ; $i < count($inputs['product_quantity']); $i++){
                if(!empty($request->store_id)){
                    $stock = Stock::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                }
                if(empty($stock)){
                    return back()->with('danger','Unavailable Product Quantity..');
                }
                if($request->product_quantity[$i] > $stock->purchase_qty){
                    return back()->with('danger','Unavailable Product Quantity..');
                }        
            }
        }

        
        $lastInvoiceID = Invoice::orderBy('id', 'DESC')->pluck('sell_invoice_no')->first();
        if(empty( $lastInvoiceID)){
            $newInvoiceID = date('ymd').'01';
        }else{
            $newInvoiceID = $lastInvoiceID + 1;
        }


	            $invoice = new Invoice();
	            $invoice->date = $request->invoice_date;
	            $invoice->customer_id = $request->customer_id;
	            $invoice->sell_invoice_no = $newInvoiceID;
	            $invoice->payment_type = $request->payment_type;
	            $invoice->grand_total_amount = $request->grand_total_price;
	            $invoice->discount_percentage = $request->discount_per;
	            $invoice->total_discount = $request->total_dicount;
	            $invoice->tax_percentage = $request->tax_per;
	            $invoice->total_tax = $request->total_tax;
	            $invoice->vat_percentage = $request->vat_per;
	            $invoice->total_vat = $request->total_vat;
	            $invoice->bank_id = $request->bank_id;
	            $invoice->save();

                $customerPayment = new Customer_payment();
                $customerPayment->payment_total =  $request->grand_total_price ;
                $customerPayment->customer_id =  $request->customer_id;
                $customerPayment->invoice_id =   $invoice->id;
                $customerPayment->date = date('Y-m-d');
                $customerPayment->type = 1; // 1 mean customer debit  by return
                $customerPayment->payment_by = $request->payment_type;
                $customerPayment->save();
	    
	            if(count($inputs) > 0){
	                for($i = 0 ; $i < count($inputs['product_quantity']); $i++){
	                    $invoice_details = new Invoice_details();

	                    if(!empty($request->store_id)){
	                        $invoice_details->store_id = $request->store_id;
	                    }    
	    
	                    $invoice_details->invoice_id = $invoice->id;
	                    $invoice_details->product_id = $request->product_id[$i];
	                    $invoice_details->quantity = $request->product_quantity[$i];
	                    $invoice_details->rate = $request->product_rate[$i];
	                    $invoice_details->discount = $request->total_dicount;
	                    $invoice_details->total_price = $request->total_price[$i];
	                    $invoice_details->save();
	       
	                    if(isset($request->store_id)){
	                        $stock = Stock::where('product_id',$request->product_id[$i])->first();
	                        $stock->sell_qty += $request->product_quantity[$i];
	                        $stock->save();
	                    }
	                        if(empty($stock)){
	                            $stock = new Stock();
	                            $stock->product_id = $request->product_id[$i];
	                            $stock->sell_qty += $request->product_quantity[$i];
	                            $stock->save();
	                        }
	                    }
	                    
	                }
        return redirect('/admin/invoice/manage')->with('message','Product Sell Successfully.');
    }

    public function manage(){
    	$customers = Customer::all();
    	$websetting = Websetting::first();

    	$totalamount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->first();

    	$invoices = DB::table('invoicemanage')->get();

    	return view('admin.invoice.manageInvoice', get_defined_vars());
    }


    public function edit($id)
    {
        $invoice =  Invoice::find($id);
        // return $invoice->total_amount;
        $invoice_details =  Invoice_details::where('invoice_id',$invoice->id)->get();
        $invoice_dt =  Invoice_details::where('invoice_id',$invoice->id)->first();
        $customers = Customer::all();
        $products = Product::all();
        $stores = Store::all();
        $banks = Bank::all();


        $lastInvoiceID = Invoice::orderBy('id', 'DESC')->pluck('sell_invoice_no')->first();
        $inventoryId = Invoice_details::where('invoice_id',$invoice->id)->first(['store_id','product_id']);

        return view('admin.invoice.editInvoice', get_defined_vars());
    }

    public function update(Request $request){
        
         //return $request->all();

        $this->validate($request,[
            'products_id.*' => 'required',
            'product_quantity.*' => 'required',
            'customer_id' => 'required',
            'date' => 'required',
            'invoice_details' => 'required',
        ]);

        $inputs = Input::except(['_token','customer_id','payment_type','store_id','status','invoice_details']);
        


    DB::beginTransaction();
    try{

        $invoice =  Invoice::find($request->invoice_detail_id);
        
            for($i = 0 ; $i < count($inputs['product_quantity']); $i++){

                $invoice_details =  Invoice_details::where('invoice_id',$invoice->id)->where('product_id',$request->product_id[$i])->first();
               
              
                    if(!empty($request->store_id)){
                        
                        $stock = Stock::where('product_id',$invoice_details->product_id)->where('store_id',$request->store_id)->first();
                        if($request->product_quantity[$i] > ($stock->purchase_qty + $invoice_details->quantity) ){
                            return back()->with('message','Unavailable Product Quantity..');
                        }
                    }elseif(!empty($request->store_id)){
                        $stock = Stock::where('product_id',$invoice_details->product_id)->where('store_id',$request->store_id)->first();
                        if($request->product_quantity[$i] > ($stock->purchase_qty + $invoice_details->quantity) ){
                            return back()->with('message','Unavailable Product Quantity..');
                        }
                    }
                    $stock->sell_qty -= $invoice_details->quantity;
                    $stock->purchase_qty += $invoice_details->quantity;
                    $stock->save();
                    $stock->sell_qty += $request->product_quantity[$i];
                    $stock->purchase_qty -= $request->product_quantity[$i];
                    $stock->save();
            }
        
        


            $invoice->date = $request->date;
            $invoice->challan = $request->challan;
            $invoice->customer_id = $request->customer_id;
            $invoice->payment_type = $request->payment_type;
            $invoice->status = $request->status;
            $invoice->others_bill = $request->others_bill;
            $invoice->others_price = $request->others_price;
            $invoice->invoice_details = $request->invoice_details;
            //grand total
            $grand_total = 0;
            if(count($request->product_quantity) > 0){
                for($i = 0; $i < count($request->product_quantity); $i++){
                    $total_price  = $request->product_quantity[$i] * $request->product_rate[$i] ;
                    $grand_total  += $total_price;
                }
            }
       
        //dis one
        // return $grand_total;
        $discount_one =($grand_total *  $request->discount_per)/100;
        $invoice->total_discount = $discount_one;
        $grand_total =  $grand_total - $discount_one;

        
        $invoice->total_amount = round($grand_total + $request->others_price);
        $invoice->save();


        $customerPayment =  Customer_payment::where('invoice_id', $invoice->id)->first();
        
        $customerPayment->payment_total = $invoice->total_amount;
        $customerPayment->customer_id =  $request->customer_id; 
        $customerPayment->invoice_id =   $invoice->id;
        $customerPayment->date =   $request->date;
        $customerPayment->type =   1; // 0 mean debt payment
        $customerPayment->save();


        $invoice_details =  Invoice_details::where('invoice_id',$invoice->id)->get();
        // return $invoice_details[0];

        if(count($inputs) > 0){
            for($i = 0 ; $i < count($inputs['product_quantity']); $i++){

                              
                $invoice_details[$i]->quantity = $request->product_quantity[$i];
                $invoice_details[$i]->rate = $request->product_rate[$i];
                $total_price = $request->product_quantity[$i] * $request->product_rate[$i];
                
                $discount_one = ($total_price * $request->discount_per)/100;

                $total_price = $total_price - $discount_one; 

                $invoice_details[$i]->total_price = round($total_price);

                $invoice_details[$i]->save();
                
            }
        }


        DB::commit();
        $status = true;
    }catch(\Exception  $e){
        $message = $e->getMessage();
        DB::rollback();
        $status = false;
        return back()->with('danger','Please fill out form correctly...');
    }

        if($status){
            return redirect('/admin/invoice/manage')->with('message','Product Sell Update Successfully.');
        }else{
            return back()->with('message',$message);
        }

 
       
    }













    public function pos(){
        $products = Product::all();
        $customers = Customer::all();
        $stores = Store::all();
        $banks = Bank::all();
        $stocks = Stock::first();

        $lastInvoiceID = Invoice::orderBy('id', 'DESC')->pluck('sell_invoice_no')->first();
        if(empty( $lastInvoiceID)){
            $newInvoiceID = date('ymd').'01';
        }else{
            $newInvoiceID = $lastInvoiceID + 1;
        }

        return view('admin.invoice.posinvoice', get_defined_vars());
    }






















    public function managesearcher(Request $request){

    	$customers = Customer::all();
    	$websetting = Websetting::first();

    	$totalamount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();


    	if(!empty($request->from_date))
      	{
      		$invoices = DB::table('invoicemanage')
    				->whereBetween('date', array($request->from_date, $request->to_date))
    				->get();

    	}
    	return view('admin.invoice.manageInvoice', get_defined_vars());
    }

    public function invoicewise($id){
    	$websetting = Websetting::first();
    	$company = Company::first();

    	$customers = DB::table('customers')
    					->join('invoice_wise', 'customers.id', '=', 'invoice_wise.customer_id')
            			->select('customers.*', 'invoice_wise.sell_invoice_no', 'invoice_wise.date')
    					->where('sell_invoice_no', $id)
    					->first();

    	$quantitys = DB::table('invoice_wise')
                ->select(DB::raw('SUM(quantity) as quantity'))
                ->where('sell_invoice_no', '=', $id)
                ->first();

        $total_prices = DB::table('invoice_wise')
                ->select(DB::raw('SUM(total_price) as total_price'))
                ->where('sell_invoice_no', '=', $id)
                ->first();

        $total_discounts = DB::table('invoice_wise')
                ->select(DB::raw('SUM(total_discount) as total_discount'))
                ->where('sell_invoice_no', '=', $id)
                ->first();

    	$invoicewises = DB::table('invoice_wise')
    					->where('sell_invoice_no', $id)
    					->get();


    	return view('admin.invoice.invoice-wise', get_defined_vars());
    }


}
