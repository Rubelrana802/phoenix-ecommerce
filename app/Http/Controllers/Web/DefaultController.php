<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index(){
    	return view('web.home.homeContent');
    }

    public function singleproduct(){
    	return view('web.product.single-product');
    }
}
