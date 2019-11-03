<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person_info;
use App\Person_loan;
use App\Websetting;
use DB;

class PersonController extends Controller
{
    public function index(){
        return view('admin.personal_loan.create');
    }

    public function save(Request $request){
        $persons = new Person_info();
        $persons->person_name = $request->name;
        $persons->person_phone = $request->phone;
        $persons->email = $request->email;
        $persons->person_address = $request->address;
        $persons->save();

        $notification = array(
                'message' => 'Person Created Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/person/manage')->with($notification);
    }


    public function manage(){
        $websetting = Websetting::first();

        $persons =  DB::table('person_infos')
            ->get();       
        
        return view('admin.personal_loan.manage', get_defined_vars());
    }


    public function edit($id)
    {
        $persons = Person_info::where('id',$id)->first();
        return view('admin.personal_loan.edit')->with(['persons' => $persons]);
    }


    public function update(Request $request)
    {
        $persons = Person_info::find($request->person_id); //form id 
        $persons->person_name = $request->name; 
        $persons->email = $request->email; 
        $persons->person_phone = $request->phone; 
        $persons->person_address = $request->address; 
        $persons->save();

        $notification = array(
                'message' => 'Person Updated Successfully!',
                'alert-type' => 'success');
        return redirect('/admin/person/manage')->with($notification);
    }


    public function loan(){
        $persons = Person_info::all();
        return view('admin.personal_loan.loan', get_defined_vars());
    }

        public function loansave(Request $request){

        $number = rand(1000,10000000);

        $loans = new Person_loan();
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
        $persons = Person_info::all();
        return view('admin.personal_loan.payment', get_defined_vars());
    }
    
    public function paymentsave(Request $request){

        $number = rand(1000,10000000);

        $loans = new Person_loan();
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

       $persons = Person_info::all();
       $person_info = Person_info::where('id', $id)->first();
       $websetting = Websetting::first();


        $total_debit = DB::table('person_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->where('person_id', '=', $id)
                ->first();

        $total_credit = DB::table('person_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->where('person_id', '=', $id)
                ->first();

       $person_ledger =  DB::table('person_infos')
            ->join('person_loans', 'person_infos.id', '=', 'person_loans.person_id')
            ->select('person_infos.*', 'person_loans.*')
            ->where('person_id', '=', $id)
            ->get(); 


        return view('admin.personal_loan.person-wise-ledger', get_defined_vars()); 
    }

    public function personwisedate(){

       $persons = Person_info::all();
       $person_info = Person_info::first();
       $websetting = Websetting::first();


        $total_debit = DB::table('person_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->first();

        $total_credit = DB::table('person_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->first();

       $person_ledger =  DB::table('person_infos')
            ->join('person_loans', 'person_infos.id', '=', 'person_loans.person_id')
            ->select('person_infos.*', 'person_loans.*')
            ->get(); 


        return view('admin.personal_loan.person-wise-search', get_defined_vars()); 
    }

    public function personwisesearch(Request $request){

        $validatedData = $request->validate([
            'person_id' => 'required',

        ]);

        $persons = Person_info::all();
        $person_info = DB::table('person_infos')
                        ->where('id', $request->person_id)
                        ->first();

        $websetting = Websetting::first();


        $total_debit = DB::table('person_loans')
                ->select(DB::raw('SUM(debit) as debit'))
                ->where('person_id', $request->person_id)
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();

        $total_credit = DB::table('person_loans')
                ->select(DB::raw('SUM(credit) as credit'))
                ->where('person_id', $request->person_id)
                ->whereBetween('date', array($request->from_date, $request->to_date))
                ->first();


        if(!empty($request->from_date))
          {
            $person_ledger = DB::table('person_infos')
                        ->join('person_loans', 'person_infos.id', '=', 'person_loans.person_id')
                        ->select('person_infos.*', 'person_loans.*')
                        ->where('person_id', $request->person_id)
                        ->whereBetween('date', array($request->from_date, $request->to_date))
                        ->get();
        }

        return view('admin.personal_loan.person-wise-search', get_defined_vars()); 
    }
}
