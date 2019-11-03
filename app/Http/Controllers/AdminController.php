<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

    public function index()
    {
        return view('admin.home.homeContent');
    }
}
