@extends('admin.master')

@section('title')
  Add Store
@endsection

@section('content')

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Store</h1>
            <small>Add new Store</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Store</a></li>
                <li class="active">Add Store</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/admin/store/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Store </a>
                </div>
            </div>
        </div>

        <!-- New store -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Store </h4>
                        </div>
                    </div>
                <form action="{{ route('store.save') }}" class="form-vertical" id="insert_customer" method="post" accept-charset="utf-8">
                @csrf    

                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label">Store Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="store_name" id="store_name" type="text" placeholder="Store Name"  required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Store Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" placeholder="Store Mobile" min="0" tabindex="3" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Store Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Store Address" tabindex="4"></textarea>
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
  
