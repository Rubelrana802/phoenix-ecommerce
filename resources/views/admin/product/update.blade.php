@extends('admin.master')

@section('title')
  Update Category
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Product Edit</h1>
            <small>Edit your product</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Product</a></li>
                <li class="active">Product Edit</li>
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
                            <h4>Product Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('product.update') }}" class="form-vertical" id="product_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label">Product Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_name" type="text" id="product_name"  required tabindex="1" value="{{ $product->product_name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="serial_no" class="col-sm-4 col-form-label">Serial Number </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="serial_no" name="serial_no" value="{{ $product->serial_number }}" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_model" class="col-sm-4 col-form-label">Model <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="product_model" name="model" required value="{{ $product->model }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label">Category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                        
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}" {{ $product->category_id ==  $cat->id ? 'selected' : '' }} >{{ $cat->name }}</option>
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
                                        <input class="form-control text-right" id="sell_price" name="price" type="text" required="" value="{{ $product->sale_price }}" tabindex="5" min="0">
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
                                                <option value="{{ $unit->id }}" {{ $product->unit_id == $unit->id ? 'selected' : ''  }}>{{ $unit->unit_name }}</option>
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
                                    @if($product->image)
                                        <img class="img img-responsive text-center" src="{{ asset('public/admin/product/images/'.$product->image) }}" height="80" width="70" style="padding: 5px;">
                                    @else
                                        <img class="img img-responsive text-center" src="{{ asset('public/admin/product/images/product.png') }}" height="80" width="70" style="padding: 5px;">
                                    @endif
                                    </div>
                                </div> 
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label">Tax </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="tax" id="tax" tabindex="8" value="{{ $product->tax }}">
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
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}" {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>{{ $supplier->supplier_name }}</option>
                                            @endforeach  
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label">Supplier Price <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="supplier_price" name="supplier_price" type="text" required="" value="{{ $product->supplier_price }}" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>                            
                        </div>
                        <br>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <center><label for="description" class="col-form-label">Product Details</label></center>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Product Details" tabindex="2">{{ $product->details }}</textarea>
                            </div>
                        </div>
                        <input type="hidden" value="{{ $product->id }}" name="product_id">
						<br>
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
