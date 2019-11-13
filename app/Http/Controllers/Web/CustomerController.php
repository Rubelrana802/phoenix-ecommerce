<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
    	return view('web.login.login');
    }

    public function myaccount(){
    	return view('web.customer.my-account');
    }


    public function wishlist(){
    	return view('web.customer.wishlist');
    } 

    public function viewcard(){
    	return view('web.customer.view-card');
    } 

    public function checkout(){
    	return view('web.customer.check-out');
    }

}
