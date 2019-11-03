@extends('admin.master')

@section('title')
  Add Product
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>New Product</h1>
            <small>Add new product</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Product</a></li>
                <li class="active">New Product</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                     <!-- <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Product (CSV) </a> -->
                    <a href="{{ route('product.manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Manage Product </a>
                </div>
            </div>
        </div>

        <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>New Product</h4>
                        </div>
                    </div>
                    <form action="{{ route('product.save') }}" class="form-vertical" id="insert_product" name="insert_product" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    	
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label">Product Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_name" type="text" id="product_name" placeholder="Product Name" required tabindex="1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="serial_no" class="col-sm-4 col-form-label">Serial Number </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="serial_no" name="serial_no" placeholder="Serial Number"   />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_model" class="col-sm-4 col-form-label">Model <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="product_model" name="model" placeholder="Model"  required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label">Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                        <option value=""></option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label">Sale Price <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="sell_price" name="price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label">Unit</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="unit" name="unit" tabindex="-1" aria-hidden="true">
                                            <option value=""></option>
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                                            @endforeach   
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label">Image </label>
                                    <div class="col-sm-8">
                                    <span class="input-group-addon btn default btn-file">
                            			<input type="file" name="image">
                                    </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label">Tax </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="tax" id="tax" tabindex="8">
                                            <option value=""></option>
                                            @foreach ($taxes as $tax)
                                                <option value="{{ $tax->tax }}">{{ $tax->tax }}%</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label">Supplier <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="supplier_id" name="supplier_id" tabindex="3" required="">
                                            <option value=""></option>
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                            @endforeach  
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label">Supplier Price <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="supplier_price" name="supplier_price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>                            
                        </div>
                        <br>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <center><label for="description" class="col-form-label">Product Details</label></center>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Product Details" tabindex="2"></textarea>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <input type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product" value="Save" tabindex="10"/>
                                <input type="submit" value="Save And Add Another" name="add-product-another" class="btn btn-large btn-success" id="add-product-another" tabindex="9">
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
  
