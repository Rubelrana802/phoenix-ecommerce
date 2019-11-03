@extends('admin.master')

@section('title')
  Add Customer
@endsection

@section('content')

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Customer</h1>
            <small>Add new customer</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Customer</a></li>
                <li class="active">Add Customer</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('customer.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Customer </a>
                    <a href="{{ route('customer.ledger') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Customer Ledger</a>
                    <a href="{{ route('credit.customer') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Credit Customer </a>
                    <a href="{{ route('paid.customer') }}" class="btn btn-warning m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Paid Customer </a>
                </div>
            </div>
        </div>

        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Customer </h4>
                        </div>
                    </div>
                <form action="{{ route('customer.save') }}" class="form-vertical" id="insert_customer" method="post" accept-charset="utf-8">
                @csrf    

                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="customer_name" id="customer_name" type="text" placeholder="Customer Name"  required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Customer Email</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="email" id="email" type="email" placeholder="Customer Email" tabindex="2"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Customer Mobile</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" placeholder="Customer Mobile" min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Customer Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Customer Address" tabindex="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-3 col-form-label">Previous Credit Balance</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="text" placeholder="Previous Credit Balance" tabindex="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="Save" tabindex="7"/>
                                
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
	
@endsection
  
