<?php

namespace App\Http\Controllers;
use App\Company;
use App\Websetting;
use DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function manage(){
        $company = Company::all();
        return view('admin.company.manage', get_defined_vars());
    }

    public function edit($id){
        $company = Company::where('id', $id)->first();
        return view('admin.company.update', get_defined_vars()); 
    }

    public function update(Request $request)
    {
        $company = Company::find($request->company_id); //form id 
        $company->company_name = $request->company_name; 
    	$company->email = $request->email; 
    	$company->mobile = $request->mobile; 
        $company->address = $request->address;
        $company->website = $request->website;  
    	$company->save();

        return redirect('/admin/company/manage')->with('message','Company Updated Successfully.');   
    }


////web Setting
    public function websetting($setting_id){
        $websetting = Websetting::where('setting_id', $setting_id)->first();
        return view('admin.company.websetting', get_defined_vars()); 
    }

    public function updatewebsetting(Request $request)
    {
        $websetting = Websetting::find(1); //form id 

        //image upload logo
        if($request->hasfile('logo')) 
            { 
              $file = $request->file('logo');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $websetting->logo = $filename;
        }

        //image upload invoice_logo
        if($request->hasfile('invoice_logo')) 
            { 
              $file = $request->file('invoice_logo');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $websetting->invoice_logo = $filename;
        }
        //image upload favicon
        if($request->hasfile('favicon')) 
            { 
              $file = $request->file('favicon');
              $extension = $file->getClientOriginalExtension();
              $filename =time().'.'.$extension;
              $file->move('public/admin/product/images/', $filename);
              $websetting->favicon = $filename;
        }
 
        $websetting->currency_position = $request->currency_position;
        $websetting->currency = $request->currency;
        $websetting->footer_text = $request->footer_text;
        $websetting->language = $request->language;
        $websetting->rtr = $request->rtr;
        $websetting->captcha = $request->captcha;
        $websetting->site_key = $request->site_key;
        $websetting->secret_key = $request->secret_key;
        $websetting->discount_type = $request->discount_type;  
    	$websetting->save();

        return redirect()->back()->with('message','Web Setting Updated Successfully.');   
    }
}
