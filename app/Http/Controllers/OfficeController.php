<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office_info;
use App\Office_loan;
use App\Websetting;
use DB;
class OfficeController extends Controller
{
    public function index(){
        return view('admin.office_loan.create');
    }

    public function save(Request $request){
        $offices = new Office_info();
        $offices->person_name = $request->name;
        $offices->person_phone = $request->phone;
        $offices->email = $request->email;
        $offices->person_address = $request->address;
        $offices->save();

        $notification = array(
                'message' => 'Person Created Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/office/manage')->with($notification);
    }


    public function manage(){
        $websetting = Websetting::first();

        $offices =  DB::table('office_infos')
            ->get();       
        
        return view('admin.office_loan.manage', get_defined_vars());
    }


    public function edit($id)
    {
        $offices = Office_info::where('id',$id)->first();
        return view('admin.office_loan.edit')->with(['offices' => $offices]);
    }


    public function update(Request $request)
    {
        $offices = Office_info::find($request->person_id); //form id 
        $offices->person_name = $request->name; 
        $offices->email = $request->email; 
        $offices->person_phone = $request->phone; 
        $offices->person_address = $request->address; 
        $offices->save();

        $notification = array(
                'message' => 'Person Updated Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/office/manage')->with($notification);
    }


    public function loan(){
        $offices = Office_info::all();
        return view('admin.office_loan.loan', get_defined_vars());
    }

        public function loansave(Request $request){

        $number = rand(1000,10000000);

        $loans = new Office_loan();
        $loans->transaction_id = $number;
        $loans->person_id = $request->person_id;
        $loans->debit = $request->ammount;
        $loans->credit = 0;
        $loans->date = $request->date;
        $loans->details = $request->details;
        $loans->save();

        $notification = array(
                'message' => 'Successfully Added.',
                'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }



    public function payment(){
        $offices = Office_info::all();
        return view('admin.office_loan.payment', get_defined_vars());
    }
    
    public function paymentsave(Request $request){

        $number = rand(1000,10000000);

        $loans = new Office_loan();
        $loans->transaction_id = $number;
        $loans->person_id = $request->person_id;
        $loans->credit = $request->ammount;
        $loans->debit = 0;
        $loans->date = $request->date;
        $loans->details = $request->details;
        $loans->save();

        $notification = array(
                'message' => 'Successfully Added.',
                'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function personwise($id){

       $offices = Office_info::all();
       $person_info = Office_info::where('id', $id)->first();
       $websetting = Websetting::first();


        $total_debit = DB::table('office_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->where('person_id', '=', $id)
                ->first();

        $total_credit = DB::table('office_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->where('person_id', '=', $id)
                ->first();

       $person_ledger =  DB::table('office_infos')
            ->join('office_loans', 'office_infos.id', '=', 'office_loans.person_id')
            ->select('office_infos.*', 'office_loans.*')
            ->where('person_id', '=', $id)
            ->get(); 


        return view('admin.office_loan.person-wise-ledger', get_defined_vars()); 
    }

    public function personwisedate(){

       $offices = Office_info::all();
       $person_info = Office_info::first();
       $websetting = Websetting::first();


        $total_debit = DB::table('office_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->first();

        $total_credit = DB::table('office_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->first();

       $person_ledger =  DB::table('office_infos')
            ->join('office_loans', 'office_infos.id', '=', 'office_loans.person_id')
            ->select('office_infos.*', 'office_loans.*')
            ->get(); 


        return view('admin.office_loan.person-wise-search', get_defined_vars()); 
    }

    public function personwisesearch(Request $request){
        $validatedData = $request->validate([
            'person_id' => 'required',

        ]);

        $offices = Office_info::all();
        $person_info = DB::table('office_infos')
                        ->where('id', $request->person_id)
                        ->first();

        $websetting = Websetting::first();


        $total_debit = DB::table('office_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->where('person_id', $request->person_id)
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();

        $total_credit = DB::table('office_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->where('person_id', $request->person_id)
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();


        if(!empty($request->from_date))
          {
            $person_ledger = DB::table('office_infos')
                        ->join('office_loans', 'office_infos.id', '=', 'office_loans.person_id')
                        ->select('office_infos.*', 'office_loans.*')
                        ->where('person_id', $request->person_id)
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->get();
        }

        return view('admin.office_loan.person-wise-search', get_defined_vars()); 
    }


}
