<?php

namespace App\Http\Controllers;
use App\Supplier;
use App\Bank;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    
    public function index(){

    	return view('admin.supplier.create');
    }

    public function save(Request $request){
    	$supplier = new Supplier();
    	$supplier->supplier_name = $request->supplier_name;
    	$supplier->mobile = $request->mobile;
    	$supplier->address = $request->address;
    	$supplier->details = $request->details;
    	$supplier->previous_due = $request->previous_balance;
    	$supplier->save();
    return redirect('/admin/supplier/add')->with('message', 'Supplier added Successfully.');
    }

    public function manage(){
    	$suppliers = Supplier::all();
    return view('admin.supplier.manage', get_defined_vars());
    }

        public function edit($id)
    {
        $supplier = Supplier::where('id',$id)->first();
        return view('admin.supplier.update')->with(['supplier' => $supplier]);
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
        $supplier = Supplier::find($request->supplier_id); //form id 
        $supplier->supplier_name = $request->supplier_name;
        $supplier->mobile = $request->mobile;
        $supplier->address = $request->address;
        $supplier->details = $request->details;
        $supplier->save();

        return redirect('/admin/supplier/manage')->with('message','Supplier Updated Successfully.');   
    }

    public function supplierpayment(){
        $banks = Bank::all();
        $suppliers = Supplier::all();

        return view('admin.supplier.supplier-payment', get_defined_vars());    
    }
}
