@extends('admin.master')

@section('title')
  Supplier Purchase Report
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Stock Report (Supplier Wise)</h1>
            <small>Stock Report (Supplier Wise)</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Stock</a></li>
                <li class="active">Stock Report (Supplier Wise)</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('product.stock') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Stock Report (Product Wise) </a>
                    <a href="{{ route('purchase.stock.report') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Stock Report </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    	<form action="#" class="form-vertical" id="stock_report_supplier_wise" method="post" accept-charset="utf-8">
						@csrf
                        	<div class="form-group row">
	                            <label for="supplier_id" class="col-sm-3 col-form-label">Select Supplier: <i class="text-danger">*</i></label>
	                            <div class="col-sm-6">
	                                <select class="form-control" id="supplier_id" name="supplier_id" required="">
	                                    <option value="">Select One</option>
	                                    @foreach($suppliers as $supplier)
	                                    	<option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
	                                    @endforeach                                   
	                                </select>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="product_id" class="col-sm-3 col-form-label">Select Product: <i class="text-danger">*</i></label>
	                            <div class="col-sm-6">
	                                <select class="form-control" id="product_id" name="product_id" required="">
	                                	<option value="">Select One</option>
	                                	@foreach($products as $product)
	                                    	<option value="{{ $product->id }}">{{ $product->product_name }}</option>
	                                    @endforeach
	                                </select>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="" class="col-sm-3 col-form-label"></label>
	                            <div class="col-sm-6 text-center">
	                                <button type="submit" class="btn btn-primary">Search</button>
	                            </div>
	                        </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Stock Report (Supplier Wise)</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                    			<thead>
                    				<tr>
                                        <th class="text-center">SL.</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Product Model</th>

                                        <th class="text-center">In Qnty.</th>
                                        <th class="text-center">Out Qnty.</th>
                                        <th class="text-center">Stock                                                
                                            </th>
                                        <th class="text-center">Stock Sale Price</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    	<?php $i=0; ?>
                                    	@foreach($supplierstock as $stock)
                                    	<tr>
	                                        <td class="text-center">{{ ++$i }}</td>
	                                        <td><a href="#">{{ $stock->product_name }}</a></td>
	                                        <td><a href="#">{{ $stock->model }}</a></td>
	                                        <td align="center">{{ $stock->purchase_qty }}</td>
	                                        <td align="center">{{ $stock->sell_qty }}</td>
	                                        <td align="center">{{ $stock->stock }}</td>
	                                        <td align="right">{{ $websetting->currency }} {{ $stock->stock_price }}</td>
                                    	</tr>
                                    	@endforeach
                                    </tbody>

                                    <tfoot>
                                        <tr> 
                                            <td colspan="3" align="right"><b>Grand Total:</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty }}</b></td>
                                            <td align="center"><b>{{ $sell_qty->sell_qty }}</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty - $sell_qty->sell_qty }}</td>
                                            <td align="right"><b>{{ $websetting->currency }} {{ $stock_price->stock_price }}</td>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
