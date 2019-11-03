<?php

namespace App\Http\Controllers;
use App\Supplier;
use App\Product;
use App\Bank;
use App\Store;
use App\Stock;
use DB;
use App\Product_purchase;
use App\Product_purchase_details;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(){
    	$suppliers = Supplier::all();
    	$products = Product::all();
        $banks = Bank::all();
        $stores = Store::all();

/*        $products = DB::table('products')
                    ->join('stocks','products.id', '=', 'stocks.product_id')
                    ->select('products.id','products.product_name')
                    ->whereNotIn('products.id', ['stocks.product_id'])
                    ->get();*/

        $lastInvoiceID = Product_purchase::orderBy('id', 'DESC')->pluck('purchase_invoice_no')->first();
        if(empty( $lastInvoiceID)){
            $newInvoiceID = date('ym').'01';
        }else{
            $newInvoiceID = $lastInvoiceID + 1;
        }

    	return view('admin.purchase.create', get_defined_vars());
    }



    public function savePurchase(Request $request){

        $inputs = Input::except(['_token','purchase_date','total_discount','grand_total_price','supplier_id','payment_type',]);
    
        $lastInvoiceID = Product_purchase::orderBy('id', 'DESC')->pluck('purchase_invoice_no')->first();
        if(empty( $lastInvoiceID)){
            $newInvoiceID = date('ym').'01';
        }else{
            $newInvoiceID = $lastInvoiceID + 1;
        }       

        $product_purchase = new Product_purchase();
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->status = 1;
        $product_purchase->bank_id = $request->bank_id;
        $product_purchase->purchase_date = $request->purchase_date;
        $product_purchase->payment_type = $request->paytype;
        $product_purchase->purchase_invoice_no = $newInvoiceID;
        $product_purchase->total_discount = $request->total_discount;
        $product_purchase->dis_per = $request->discount_per;
        $product_purchase->grand_total_amount = $request->grand_total_price;
        $product_purchase->save();

        // Supplier payment   
          $customerPayment = new Supplier_payment();
          $customerPayment->payment_total =  round($request->grand_total);
          $customerPayment->supplier_id =  $request->supplier_id;
          $customerPayment->purchase_id =   $purchase->id;
          $customerPayment->date =   date('Y-m-d');
          $customerPayment->type = 'c'; // c mean supplier credit  by return
          $customerPayment->save();


        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $detail = new Product_purchase_details();
                $detail->purchase_id = $product_purchase->id;

                if(!empty($request->inventory_id)){
                    $detail->inventory_id = $request->inventory_id;
                }else{
                    $detail->store_id    = $request->store_id;
                }

                $detail->product_id = $request->products_id[$i];
                $detail->quantity = $request->product_quantity[$i];
                $detail->rate = $request->product_rate[$i];

                $detail->discount = $request->total_discount;
                $detail->total_amount = $request->total_price[$i];
                $detail->save();

              

                if(!empty($request->inventory_id)){
                    // return 'inventory_id';
                    // StoreStock;
                    $stock = Stock::where('product_id',$detail->product_id)->where('inventory_id',$request->inventory_id)->first();
                    // return $stock;
                    if(!empty($stock)){
                        $stock->purchase_qty  +=  $request->product_quantity[$i];
                        $stock->save();
                    }else{
                        $stock  = new Stock();
                        $stock->inventory_id  = $request->inventory_id;
                        $stock->product_id  = $request->products_id[$i];
                        $stock->purchase_qty  = $request->product_quantity[$i];
                        $stock->save();
                    }


                }elseif(!empty($request->store_id)){
                    $stock = Stock::where('product_id',$detail->product_id)->where('store_id',$request->store_id)->first();
                    // return $stock;
                    if(!empty($stock)){
                        $stock->purchase_qty  +=  $request->product_quantity[$i];
                        $stock->save();
                    }else{
                        $stock  = new Stock();
                        $stock->store_id  = $request->store_id;
                        $stock->product_id  = $request->products_id[$i];
                        $stock->purchase_qty  = $request->product_quantity[$i];
                        $stock->save();
                    }
                }
            } 
        }

        return redirect('/admin/purchase/manage')->with('message','Product Purchase Successfully.');
    }


    public function manage(){

        $total = DB::table('product_purchases')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->first();

        $purchases = DB::table('suppliers')
            ->join('product_purchases', 'suppliers.id', '=', 'product_purchases.supplier_id')
            ->select('product_purchases.*', 'suppliers.supplier_name','suppliers.mobile')
            ->get();

        return view('admin.purchase.manage', get_defined_vars());
    }

     public function edit($id){
        $suppliers = Supplier::all();
        $products = Product::all();
        $banks = Bank::all();
        $stores = Store::all();
        $stocks = Stock::all();
        $product_purchase = product_purchase::find($id);

        $inventoryId = product_purchase_details::where('purchase_id',$product_purchase->id)->first(['store_id','inventory_id']);

        if($inventoryId->inventory_id != ''){

            $availableProducts = Stock::where('inventory_id','>=','0')->get()->groupBy('inventory_id');
        }else{
            $availableProducts = Stock::where('store_id','>=','0')->get()->groupBy('store_id');
        }

        $product_purchase_details = product_purchase_details::where('purchase_id',$product_purchase->id)->get();

        return view('admin.purchase.update', get_defined_vars());
     }   


    public function update(Request $request){

        if(!empty($request->inventory_id && !empty($request->store_id))){
            return back()->with('danger','Select one Godown or Store. Not Both..');
        }

        $inputs = Input::except(['_token','challan_no','purchase_date','total_discount','grand_total_price','supplier_id','status','purchase_details','payment_type',]);

        $product_purchase =  product_purchase::find($request->purchase_id);
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->status = 1;
        $product_purchase->bank_id = $request->bank_id;
        $product_purchase->purchase_date = $request->purchase_date;
        $product_purchase->payment_type = $request->paytype;
        $product_purchase->total_discount = $request->total_discount;
        $product_purchase->dis_per = $request->discount_per;
        $product_purchase->grand_total_amount = $request->grand_total_price;
       
        $grand_total = 0;
        
        
        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];
                $grand_total += $total_price;
            } 
        }
        // return $grand_total;
        
        $total_discount = $grand_total *  $request->dis_percent;
        $total_discount = $total_discount/100;
        $product_purchase->total_discount = $total_discount;
        $product_purchase->grand_total_amount = $grand_total - $total_discount;
        $product_purchase->save();

        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $detail =  product_purchase_details::where('purchase_id',$product_purchase->id)->where('product_id',$request->products_id[$i])->first();

                if(!empty($detail->inventory_id)){
                    $stock = Stock::where('product_id',$detail->product_id)->where('inventory_id',$detail->inventory_id)->first(); 
                        
                    if(!empty($stock)){
                        // return $detail->quantity ;
                        $stock->purchase_qty  -=  $detail->quantity;
                        $stock->save(); 
                    }
                }elseif(!empty($detail->store_id)){
                    $stock = Stock::where('product_id',$detail->product_id)->where('store_id',$detail->store_id)->first();
                    if(!empty($stock)){
                        $stock->purchase_qty  -=  $detail->quantity;
                        $stock->save();
                    }
                }


                if(!empty($detail->inventory_id)){
                    $stock = Stock::where('product_id',$detail->product_id)->where('inventory_id',$detail->inventory_id)->first();
                    
                    if($stock != ''){
                        $stock->purchase_qty  +=  $request->product_quantity[$i];
                        $stock->save();
                    }else{
                        $stock  = new Stock();
                        $stock->inventory_id  = $request->inventory_id;
                        $stock->product_id  = $request->products_id[$i];
                        $stock->purchase_qty  = $request->product_quantity[$i];
                        $stock->save();
                    }


                }elseif($detail->store_id != ''){
                    $stock = Stock::where('product_id',$detail->product_id)->where('store_id',$detail->store_id)->first();
                    // return $stock;
                    if(!empty($stock)){
                        $stock->purchase_qty  +=  $request->product_quantity[$i];
                        $stock->save();
                    }else{
                        $stock  = new Stock();
                        $stock->store_id  = $request->store_id;
                        $stock->product_id  = $request->products_id[$i];
                        $stock->purchase_qty  = $request->product_quantity[$i];
                        $stock->save();
                    }
                }


               

            //   return $detail->inventory_id;
                if($detail->inventory_id != ''){
                    $detail->inventory_id = $detail->inventory_id;
                }else{
                    $detail->store_id    = $detail->store_id;
                }

                $detail->purchase_id = $product_purchase->id;
                $detail->product_id = $request->products_id[$i];
                $detail->quantity = $request->product_quantity[$i];
                $detail->rate = $request->product_rate[$i];

                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];

                $discount =  $total_price * $request->dis_percent;
                $discount = $discount/100;
                $detail->discount = $discount ;
                $detail->total_amount = $total_price -$discount;
                $detail->save();

                

            } 
        }

        
        return redirect('/admin/purchase/manage')->with('message','Purchase Updated Successfully.');
    }

    
}
