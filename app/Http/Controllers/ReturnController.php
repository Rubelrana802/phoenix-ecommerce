<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Supplier;
use App\Product;
use App\Customer;
use App\Stock;
use App\Store;
use App\Bank;
use App\Product_purchase;
use App\Product_purchase_details;
use App\Purchase_return;
use App\Purchase_return_details;
use App\Invoice;
use App\Invoice_details;
use App\Sale_return;
use App\Sale_return_details;
use App\Customer_payment;
use App\Supplier_payment;
use App\Websetting;
use App\Company;
use DB;

class ReturnController extends Controller
{
    public function index(){
    	$component = '';
    	return view('admin.return.sale-purchase-return', get_defined_vars());
    }


    public function returnPurchaseProduct(Request $request,$invoice=null){
        $product_purchase;
        if ($request->isMethod('post')){
            $product_purchase = Product_purchase::where('purchase_invoice_no',$request->purchase_id)->first();

        }elseif($request->isMethod('get')){
            if($invoice != null){
                $product_purchase = Product_purchase::where('purchase_invoice_no',$invoice)->first();
            }
        }
        if(empty($product_purchase)){

            $notification = array(
                'message' => 'Invoice Not Found!',
                'alert-type' => 'warning');

            return redirect()->route('return.product')->with($notification);

        }

        $suppliers = Supplier::all();
        $products = Product::all();
        $stores = Store::all();
        $banks = Bank::all();

        $inventoryId = Product_purchase_details::where('purchase_id',$product_purchase->id)->first(['store_id','inventory_id']);
       
       
        $store_id  = 0;
 

        if(!empty($inventoryId->store_id) || $inventoryId->store_id != ''){
            $store_id = Store::find($inventoryId->store_id);
            $store_id  = $store_id->id;
        }


        if($inventoryId->inventory_id != ''){

            $availableProducts = Stock::where('inventory_id','>=','0')->get()->groupBy('inventory_id');
        }else{
            // return 1;
            $availableProducts = Stock::where('store_id','>=','0')->get()->groupBy('store_id');
        }
       

        $product_purchase_details = Product_purchase_details::where('purchase_id',$product_purchase->id)->get();
        
        $component = view('admin.return.supplier-return',get_defined_vars());
        
        return view('admin.return.sale-purchase-return',[
            
            'component' => $component,
            
        ]);
    }

    public function submitrReturnPurchaseProduct(Request $request){
        $inputs = Input::except(['_token','customer_id','payment_type','store_id','status']);

        if(empty($request->store_id)){
            for($i = 0 ; $i < count($inputs['purchase_return_quantity']); $i++){
                if(!empty($request->store_id)){
                    $purchase_details = Product_purchase_details::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                }
                if(empty($purchase_details)){
                    return back()->with('message','Unavailable Product Quantity..');
                }
                if($request->purchase_return_quantity[$i] > $purchase_details->quantity){
                    return back()->with('message','Unavailable Product Quantity..');
                }        
            }
        }
       
        //return $request->all();
          $purchase =  Product_purchase::where('id',$request->purchase_id)->first();

        // customer Sale_return
          $prorchaseReturn =  new  Purchase_return();
          $prorchaseReturn->purchase_id = $purchase->id;
          $prorchaseReturn->return_no = time();
          $prorchaseReturn->supplier_id = $request->supplier_id;
          $prorchaseReturn->payment_type = $request->payment_type;
          $prorchaseReturn->bank_id = $request->bank_id;
          $prorchaseReturn->return_date = date("Y-m-d");
          $prorchaseReturn->grand_total = round($request->grand_total);
          $prorchaseReturn->save();

        // Supplier payment   
          $customerPayment = new Supplier_payment();
          $customerPayment->payment_total =  round($request->grand_total);
          $customerPayment->supplier_id =  $request->supplier_id;
          $customerPayment->purchase_id =   $purchase->id;
          $customerPayment->date =   date('Y-m-d');
          $customerPayment->type = $request->type; // d mean supplier dedit  by return
          $customerPayment->save();        
        
          
                if(count($inputs) > 0){
                    for($i = 0 ; $i < count($inputs['purchase_return_quantity']); $i++){
                        $return_details = new Purchase_return_details();              
        
                        $return_details->return_id = $prorchaseReturn->id;                        
                        $return_details->product_id = $request->product_id[$i];

                        if(isset($request->store_id)){
                            $return_details->store_id =  $request->store_id;
                        }                         

                        $return_details->purchase_qty = $request->purchase_qnty[$i];
                        $return_details->return_qty = $request->purchase_return_quantity[$i];
                        $return_details->price = $request->purchase_rate[$i];
                        $return_details->dis_per = $request->discount_per;
                        $return_details->total_dis = $request->total_dicount;
                        $return_details->total = round($request->subtotal);
                        $return_details->save();

                        /*if(isset($request->store_id)){

                            $purchase_details = Product_purchase_details::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                            $purchase_details->quantity -= $request->purchase_return_quantity[$i];
                            $purchase_details->discount -= $request->total_dicount;;
                            $purchase_details->total_price -= round($request->subtotal);
                            $purchase_details->save();    
                        } */ 

                        if(isset($request->store_id)){

                            $stock = Stock::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                            $stock->purchase_qty -= $request->purchase_return_quantity[$i];
                            $stock->save();    
                        }                        
                    }
                }                       

            $notification = array(
                'message' => 'Customer Return Successfully!',
                'alert-type' => 'success');
        return redirect()->route('return.product')->with($notification);  

    }

    public function supplierreturn(){
        $websetting = Websetting::first();

        $grand_total = DB::table('purchase_returns')
                ->select(DB::raw('SUM(grand_total) as total'))
                ->first();

        $returnList = DB::table('suppliers')
            ->join('purchase_returns', 'suppliers.id', '=', 'purchase_returns.supplier_id')
            ->select('suppliers.*', 'purchase_returns.*')
            ->get();

        return view('admin.return.supplier-list', get_defined_vars());
    }


    public function supplierwise($id){
        $websetting = Websetting::first();
        $company = Company::first();

        $customers = DB::table('suppliers')
                        ->join('purchase_returns', 'suppliers.id', '=', 'purchase_returns.supplier_id')
                        ->select('suppliers.*', 'purchase_returns.return_no', 'purchase_returns.return_date')
                        ->where('return_no', $id)
                        ->first();

        $quantitys = DB::table('purchase_returns')
                        ->join('purchase_return_details', 'purchase_returns.id', '=', 'purchase_return_details.return_id')
                ->select(DB::raw('SUM(return_qty) as return_qty'))
                ->where('return_no', '=', $id)
                ->first();

        $total_prices = DB::table('purchase_returns')
                        ->join('purchase_return_details', 'purchase_returns.id', '=', 'purchase_return_details.return_id')
                ->select(DB::raw('SUM(total) as total'))
                ->where('return_no', '=', $id)
                ->first();

        $total_discounts = DB::table('purchase_returns')
                        ->join('purchase_return_details', 'purchase_returns.id', '=', 'purchase_return_details.return_id')
                ->select(DB::raw('SUM(total_dis) as total_dis'))
                ->where('return_no', '=', $id)
                ->first();

        $invoicewises = DB::table('purchase_returns')
                        ->join('purchase_return_details', 'purchase_returns.id', '=', 'purchase_return_details.return_id')
                        ->join('products', 'products.id', '=', 'purchase_return_details.product_id')
                        ->select('purchase_returns.*', 'purchase_return_details.*', 'products.product_name')
                        ->where('return_no', $id)
                        ->get();


        return view('admin.return.supplier-wise', get_defined_vars());
    }


    /*
    ==================================================================================
    ----------------------------------------------------------------------------------
      Customer Sale Return
    ----------------------------------------------------------------------------------
    ==================================================================================
    */

    public function returnSellProduct(Request $request,$invoice=null){
        $invoice;
        if ($request->isMethod('post')){
            $invoice =  Invoice::where('sell_invoice_no',$request->invoice_id)->first();
        }elseif($request->isMethod('get')){
            if($invoice != null){
                $invoice =  Invoice::where('sell_invoice_no',$invoice)->first();
            }
        }
        if(empty($invoice)){

            $notification = array(
                'message' => 'Invoice Not Found!',
                'alert-type' => 'warning');

            return redirect()->route('return.product')->with($notification);
        }
        $invoice_details =  Invoice_details::where('invoice_id',$invoice->id)->get();
        $customer_info = Customer::all();
        $products = Product::all();
        $stores = Store::all();
        $banks = Bank::all();

        $lastInvoiceID = Invoice::orderBy('id', 'DESC')->pluck('sell_invoice_no')->first();
        $inventoryId = Invoice_details::where('invoice_id',$invoice->id)->first(['store_id','inventory_id']);

        $component = view('admin.return.customer-return',get_defined_vars());
        
        return view('admin.return.sale-purchase-return',[
            
            'component' => $component,
            
        ]);        
    }



    public function submitReturnSellProduct(Request $request){
        //return $request->all();

        $inputs = Input::except(['_token','customer_id','payment_type','store_id','status']);

        if(empty($request->store_id)){
            for($i = 0 ; $i < count($inputs['sale_return_quantity']); $i++){
                if(!empty($request->store_id)){
                    $invoice_details = Invoice_details::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                }
                if(empty($invoice_details)){
                    return back()->with('message','Unavailable Product Quantity..');
                }
                if($request->sale_return_quantity[$i] > $invoice_details->quantity){
                    return back()->with('message','Unavailable Product Quantity..');
                }        
            }
        }
       
        //return $request->all();
          $invoice =  Invoice::where('id',$request->invoice_id)->first();

        // customer Sale_return
          $sellReturn =  new  Sale_return();
          $sellReturn->invoice_id = $request->invoice_id;
          $sellReturn->return_no = time();
          $sellReturn->customer_id = $request->customer_id;
          $sellReturn->payment_type = $request->payment_type;
          $sellReturn->bank_id = $request->bank_id;
          $sellReturn->date_return = date("Y-m-d");
          $sellReturn->grand_total = round($request->grand_total);
          $sellReturn->save();

        // customer payment  
          $customerPayment = new Customer_payment();
          $customerPayment->payment_total =  $sellReturn->grand_total;
          $customerPayment->customer_id =  $invoice->customer_id; 
          $customerPayment->invoice_id =   $invoice->id;
          $customerPayment->date =   date('Y-m-d');
          $customerPayment->type =   2; // 2 mean customer credit  by return
          $customerPayment->save();
         
        
          
                if(count($inputs) > 0){
                    for($i = 0 ; $i < count($inputs['sale_return_quantity']); $i++){
                        $return_details = new Sale_return_details();              
        
                        $return_details->return_id = $sellReturn->id;
                        $return_details->product_id = $request->product_id[$i];

                        if(isset($request->store_id)){
                            $return_details->store_id =  $request->store_id;
                        }   

                        $return_details->sold_qty = $request->sold_qty[$i];
                        $return_details->return_qty = $request->sale_return_quantity[$i];
                        $return_details->price = $request->sell_total_price[$i];
                        $return_details->dis_per = $request->discount_per;
                        $return_details->total_dis = $request->total_dicount;
                        $return_details->total = round($request->subtotal);
                        $return_details->save();

                        /*if(isset($request->store_id)){

                            $invoice_details = Invoice_details::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                            $invoice_details->quantity -= $request->sale_return_quantity[$i];
                            $invoice_details->discount -= $request->total_dicount;;
                            $invoice_details->total_price -= round($request->subtotal);
                            $invoice_details->save();    
                        } */ 

                        if(isset($request->store_id)){

                            $stock = Stock::where('product_id',$request->product_id[$i])->where('store_id',$request->store_id)->first();
                            $stock->sell_qty -= $request->sale_return_quantity[$i];
                            $stock->save();    
                        }                        
                    }
                }                       

            $notification = array(
                'message' => 'Customer Return Successfully!',
                'alert-type' => 'success');
        return redirect()->route('return.product')->with($notification); 
    }


    public function customerreturn(){
        $websetting = Websetting::first();

        $grand_total = DB::table('sale_returns')
                ->select(DB::raw('SUM(grand_total) as total'))
                ->first();

        $returnList = DB::table('customers')
            ->join('sale_returns', 'customers.id', '=', 'sale_returns.customer_id')
            ->select('customers.*', 'sale_returns.*')
            ->get();

        return view('admin.return.customer-list', get_defined_vars());
    }


    public function customerwise($id){
        $websetting = Websetting::first();
        $company = Company::first();

        $customers = DB::table('customers')
                        ->join('sale_returns', 'customers.id', '=', 'sale_returns.customer_id')
                        ->select('customers.*', 'sale_returns.return_no', 'sale_returns.date_return')
                        ->where('return_no', $id)
                        ->first();

        $quantitys = DB::table('sale_returns')
                        ->join('sale_return_details', 'sale_returns.id', '=', 'sale_return_details.return_id')
                ->select(DB::raw('SUM(return_qty) as return_qty'))
                ->where('return_no', '=', $id)
                ->first();

        $total_prices = DB::table('sale_returns')
                        ->join('sale_return_details', 'sale_returns.id', '=', 'sale_return_details.return_id')
                ->select(DB::raw('SUM(total) as total'))
                ->where('return_no', '=', $id)
                ->first();

        $total_discounts = DB::table('sale_returns')
                        ->join('sale_return_details', 'sale_returns.id', '=', 'sale_return_details.return_id')
                ->select(DB::raw('SUM(total_dis) as total_dis'))
                ->where('return_no', '=', $id)
                ->first();

        $invoicewises = DB::table('sale_returns')
                        ->join('sale_return_details', 'sale_returns.id', '=', 'sale_return_details.return_id')
                        ->join('products', 'sale_return_details.product_id', '=', 'products.id')
                        ->select('sale_returns.*', 'sale_return_details.*', 'products.product_name')
                        ->where('return_no', $id)
                        ->get();


        return view('admin.return.customer-wise', get_defined_vars());
    }





}
