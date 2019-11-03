<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Websetting;
use App\Company;
use App\Product_purchase;
use App\Product_purchase_details;
use App\Supplier;
use DB;
use App\Product;

class ReportController extends Controller
{

//Start purchase report
    public function purchasereport(){
    	$websetting = Websetting::first();
    	$company = Company::first();
    	$curentdate = date('Y-m-d');

    	$total = DB::table('product_purchases')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->where('purchase_date', '=', $curentdate)
                ->first();

        $purchases = DB::table('suppliers')
            ->join('product_purchases', 'suppliers.id', '=', 'product_purchases.supplier_id')
            ->select('product_purchases.*', 'suppliers.supplier_name','suppliers.mobile')
            ->where('purchase_date', '=', $curentdate)
            ->get();

    	return view('admin.report.purchase-report', get_defined_vars());
    }


    function purchasereportdate(Request $request)
    {
    	$websetting = Websetting::first();
    	$company = Company::first();

    	$total = DB::table('product_purchases')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->whereBetween('purchase_date', array($request->from_date, $request->to_date))
                ->first();

    if(!empty($request->from_date))
      {
       $purchases = DB::table('suppliers')
            		->join('product_purchases', 'suppliers.id', '=', 'product_purchases.supplier_id')
            		->select('product_purchases.*', 'suppliers.supplier_name','suppliers.mobile')
         			->whereBetween('purchase_date', array($request->from_date, $request->to_date))
         			->get();
    }

    return view('admin.report.purchase-report',get_defined_vars());
    }
//end purchase report


//Start Invoice wise purchase report
   public function purchaseinvoice($id){

   	$websetting = Websetting::first();
    $company = Company::first();
    $purchase = Product_purchase::first();
    $products = Product::all();

    $totalDiscount = DB::table('product_purchases')
                ->select(DB::raw('SUM(total_discount) as discount'))
                ->where('purchase_invoice_no', $id)
                ->first();

    $purchases = DB::table('product_purchases')
            ->join('product_purchase_details', 'product_purchases.id', '=', 'product_purchase_details.purchase_id')
            ->select('product_purchases.*', 'product_purchase_details.*')
            ->where('purchase_invoice_no', $id)
            ->get();

   	return view('admin.report.purchase-invoice-wise',get_defined_vars());

    }
//End Invoice wise purchase report


//Start Product Wise purchase & Sale report

    public function productwisesp($id){

    //purchase report
    	$websetting = Websetting::first();
    	$purchase = Product_purchase::first();
    	$suppliers = Supplier::all();

    	$total_amount = DB::table('product_purchase_details')
                ->select(DB::raw('SUM(total_amount) as amount'))
                ->where('product_purchase_details.product_id', $id)
                ->first();

        $discounts = DB::table('product_purchase_details')
                ->select(DB::raw('SUM(discount) as discount'))
                ->where('product_purchase_details.product_id', $id)
                ->first();

    	$products = DB::table('products')
            ->join('stocks', 'products.id', '=', 'stocks.product_id')
            ->select('products.*', 'stocks.*')
            ->where('product_id', $id)
            ->first();

        $purchases = DB::table('product_purchases')
            ->join('product_purchase_details', 'product_purchases.id', '=', 'product_purchase_details.purchase_id')
            ->select('product_purchases.*', 'product_purchase_details.*')
            ->where('product_purchase_details.product_id', $id)
            ->get();

        //sale report
           $total_quantity = DB::table('invoice_wise')
                ->select(DB::raw('SUM(quantity) as quantity'))
                ->where('product_id', $id)
                ->first();

            $total_grand_total_amount = DB::table('invoice_wise')
                ->select(DB::raw('SUM(grand_total_amount) as grand_total_amount'))
                ->where('product_id', $id)
                ->first();


            $sales = DB::table('invoice_wise')
            ->join('customers', 'invoice_wise.customer_id', '=', 'customers.id')
            ->select('invoice_wise.*', 'customers.*')
            ->where('product_id', $id)
            ->get(); 

    	return view('admin.report.product-wise-sale-purchase', get_defined_vars());

    }
    //End Product Wise purchase & Sale report

    public function supplierpurchase($id){

    	$websetting = Websetting::first();
    	$suppliers = Supplier::where('id', $id)->first();

    	$grand_total_amount = DB::table('product_purchases')
                ->select(DB::raw('SUM(grand_total_amount) as amount'))
                ->where('product_purchases.supplier_id', $id)
                ->first();

    	$supplierDetails = DB::table('suppliers')
            ->join('product_purchases', 'suppliers.id', '=', 'product_purchases.supplier_id')
            ->select('suppliers.*', 'product_purchases.*')
            ->where('suppliers.id', $id)
            ->get();

    	return view('admin.report.supplier-wise-purchase', get_defined_vars());
    }

	//End Product Wise purchase & Sale report  

    //start product-wise-stock
    public function productstock(){

    	$websetting = Websetting::first();
    	
    	$purchase_qty = DB::table('stocks')
                ->select(DB::raw('SUM(purchase_qty) as purchase_qty'))
                ->first();

        $sell_qty = DB::table('stocks')
                ->select(DB::raw('SUM(sell_qty) as sell_qty'))
                ->first();

    	$productstock = DB::table('products')
            ->join('stocks', 'products.id', '=', 'stocks.product_id')
            ->select('products.*', 'stocks.*')
            ->get();

    	return view('admin.report.product-wise-stock', get_defined_vars());
    }
    //end product-wise-stock


    //start stock report

    public function purchasereturnreport(){
        $websetting = Websetting::first();
        
        $sale_price = DB::table('stock_report')
                ->select(DB::raw('SUM(sale_price) as sale_price'))
                ->first();

        $purchase_qty = DB::table('stock_report')
                ->select(DB::raw('SUM(purchase_qty) as purchase_qty'))
                ->first();

        $sell_qty = DB::table('stock_report')
                ->select(DB::raw('SUM(sell_qty) as sell_qty'))
                ->first();

        $stock_price = DB::table('stock_report')
                ->select(DB::raw('SUM(stock_price) as stock_price'))
                ->first();

        $stockreport = DB::table('stock_report')->get();

        return view('admin.report.stock-report', get_defined_vars());
    }
    //end stock report

    //start supplier-wise-stock
    public function supplierstock(){
        $websetting = Websetting::first();
        $suppliers = Supplier::all();
        $products = Product::all();

        $purchase_qty = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(purchase_qty) as purchase_qty'))
                ->first();

        $sell_qty = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(sell_qty) as sell_qty'))
                ->first();

        $stock_price = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(stock_price) as stock_price'))
                ->first();

        $supplierstock = DB::table('supplier_stocks')->get();

        return view('admin.report.supplier-stock', get_defined_vars());
    }

    public function supplierstocksearch(Request $request){
        $websetting = Websetting::first();
        $suppliers = Supplier::all();
        $products = Product::all();

        $supplier_id =$request->supplier_id;
        $product_id =$request->product_id;

        $purchase_qty = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(purchase_qty) as purchase_qty'))
                ->where('supplier_id', $supplier_id)
                ->where('product_id', $product_id)
                ->first();

        $sell_qty = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(sell_qty) as sell_qty'))
                ->where('supplier_id', $supplier_id)
                ->where('product_id', $product_id)
                ->first();

        $stock_price = DB::table('supplier_stocks')
                ->select(DB::raw('SUM(stock_price) as stock_price'))
                ->where('supplier_id', $supplier_id)
                ->where('product_id', $product_id)
                ->first();

        if(!empty($request->supplier_id))
          {
           $supplierstock = DB::table('supplier_stocks')
                        ->where('supplier_id', array($request->supplier_id))
                        ->where('product_id', array($request->product_id))
                        ->get();
        }

        return view('admin.report.supplier-stock', get_defined_vars());
    }
    //end supplier-wise-stock


    //start sales report

    public function salesreport(){
        $currentdate = date('Y-m-d');
        $websetting = Websetting::first();

        $grand_total_amount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as grand_total_amount'))
                ->where('date', $currentdate)
                ->first();

        $salesreport = DB::table('invoicemanage')
                        ->where('date', $currentdate)
                        ->get();

        return view('admin.report.sale-date-wise', get_defined_vars());
    }

    public function salesdatewise(Request $request){

        $websetting = Websetting::first();

        $grand_total_amount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as grand_total_amount'))
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();

        if(!empty($request->from_date))
          {
            $salesreport = DB::table('invoicemanage')
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->get();
        }

        return view('admin.report.sale-date-wise', get_defined_vars());
    }

    //end sales report

    //start today report

    public function salepurchase(){
        $websetting = Websetting::first();
        $company = Company::first();
        $curentdate = date('Y-m-d');

        $grand_total_amount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as grand_total_amount'))
                ->where('date', $curentdate)
                ->first();

        $saledetails = DB::table('invoicemanage')
                        ->where('date', $curentdate)
                        ->get();

        $total = DB::table('product_purchases')
                ->select(DB::raw('SUM(grand_total_amount) as total'))
                ->where('purchase_date', '=', $curentdate)
                ->first();

        $purchases = DB::table('suppliers')
            ->join('product_purchases', 'suppliers.id', '=', 'product_purchases.supplier_id')
            ->select('product_purchases.*', 'suppliers.supplier_name','suppliers.mobile')
            ->where('purchase_date', '=', $curentdate)
            ->get();

        return view('admin.report.sales-purchases', get_defined_vars());
    }
        //end today report

   //start product wise sale report

   public function productswisesale(){

        $websetting = Websetting::first();
        $company = Company::first();
        $curentdate = date('Y-m-d');

        $grand_total_amount = DB::table('invoicemanage')
                ->select(DB::raw('SUM(grand_total_amount) as grand_total_amount'))
                ->where('date', $curentdate)
                ->first();

        $productsale = DB::table('products')
                        ->join('invoicemanage', 'products.id', '=', 'invoicemanage.product_id')
                        ->select('invoicemanage.*', 'products.*')
                        ->where('date', $curentdate)
                        ->get();

           return view('admin.report.product-wise-sale', get_defined_vars());
   }
   //end product wise sale report


}
