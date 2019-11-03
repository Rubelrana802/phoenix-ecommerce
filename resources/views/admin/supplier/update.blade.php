@extends('admin.master')

@section('title')
  Update Supplier
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Supplier Edit</h1>
            <small>Supplier Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Supplier</a></li>
                <li class="active">Supplier Edit</li>
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
                            <h4>Supplier Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('supplier.update') }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="panel-body">
                    	<div class="form-group row">
                            <label for="supplier_name" class="col-sm-3 col-form-label">Supplier Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text"  required="" value="{{ $supplier->supplier_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" placeholder="Supplier Mobile"  min="0" tabindex="2" required="" value="{{ $supplier->mobile }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Supplier Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Supplier Address" tabindex="3">{{ $supplier->address }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Supplier Details</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3" placeholder="Supplier Details" tabindex="4">{{ $supplier->details }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" value="{{ $supplier->id }}" name="supplier_id">
						
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
