<?php

namespace App\Http\Controllers;
use App\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tax = Tax::all();

        return view('admin.tax.manage')->with(['tax' => $tax]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taxadd = new Tax();
        $taxadd->tax = $request->tax;
        $taxadd->save();

        return redirect('/admin/tax')->with('message','Tax added Successfully.');
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
        $tax = Tax::where('id',$id)->first();
        return view('admin.tax.update')->with(['tax' => $tax]);
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
        $tax = Tax::find($request->tax_id); //form id 
        $tax->tax = $request->input('tax_name');
        $tax->save();

        return redirect('/admin/tax')->with('message','Tax Updated Successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = Tax::find($request->id);
        $tax->delete();

        return redirect('/admin/tax')->with('message','Tax Deteted Successfully');
    }
}
