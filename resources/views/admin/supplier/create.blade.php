@extends('admin.master')

@section('title')
  Add Supplier
@endsection

@section('content')

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Supplier</h1>
            <small>Add New Supplier</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Supplier</a></li>
                <li class="active">Add Supplier</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('supplier.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Supplier </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Supplier Ledger </a>
                    <!-- <a href="#" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Supplier Sales Details </a> -->
                </div>
            </div>
        </div>

        <!-- New supplier -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Supplier </h4>
                        </div>
                    </div>
                    <form action="{{ route('supplier.save') }}" id="insert_supplier" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="panel-body">
                    @csrf
                        <div class="form-group row">
                            <label for="supplier_name" class="col-sm-3 col-form-label">Supplier Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="Supplier Name"  required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" placeholder="Supplier Mobile"  min="0" tabindex="2" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Supplier Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Supplier Address" tabindex="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Supplier Details</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3" placeholder="Supplier Details" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-3 col-form-label">Previous Credit Balance</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="number" placeholder="Previous Credit Balance" tabindex="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-supplier" class="btn btn-primary btn-large" name="add-supplier" value="Save" tabindex="6"/>
                                <input type="submit" value="Save And Add Another" name="add-supplier-another" class="btn btn-large btn-success" id="add-supplier-another" tabindex="5">
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
	
@endsection
  
