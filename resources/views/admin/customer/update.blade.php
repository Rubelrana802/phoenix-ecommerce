@extends('admin.master')

@section('title')
  Update Customer
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Customer Edit</h1>
            <small>Customer Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Customer</a></li>
                <li class="active">Customer Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Customer Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('customer.update') }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf
                    
                        <div class="panel-body">

                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="customer_name" id="customer_name" type="text"  required="" tabindex="1" value="{{ $customer->customer_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Customer Email</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="email" id="email" type="email" tabindex="2" value="{{ $customer->email }}"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Customer Mobile</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" min="0" tabindex="3" value="{{ $customer->mobile }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Customer Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" tabindex="4"> {{ $customer->address }} </textarea>
                            </div>
                        </div>
                 

                        <input type="hidden" value="{{ $customer->id }}" name="customer_id">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
@endsection
