@extends('admin.master')

@section('title')
  Purchase Report
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Stock Report (Product Wise)</h1>
            <small>Stock Report (Product Wise)</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Stock</a></li>
                <li class="active">Stock Report (Product Wise)</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Stock Report (Supplier Wise) </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Stock Report </a>
                </div>
            </div>
        </div>     

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="text-left">Stock Report (Product Wise)</h4>
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
                                            <th class="text-center">Sale Price</th>
                                            <th class="text-center">In Qnty.</th>
                                            <th class="text-center">Out Qnty.</th>
                                            <th class="text-center">Stock</th>
                                            <th class="text-center">Sale Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=0; ?>
                                    	@foreach($stockreport as $stock)
                                    	<tr>
	                                        <td class="text-center">{{ ++$i }}</td>
	                                        <td align="center">{{ $stock->product_name }}</td>
	                                        <td align="center">{{ $stock->model}} </td>
                                            <td align="right">{{ $websetting->currency }} {{ $stock->sale_price }} </td>
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
                                            <td align="right"><b>{{ $websetting->currency }} {{ $sale_price->sale_price}}</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty}}</b></td>
                                            <td align="center"><b>{{ $sell_qty->sell_qty}}</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty - $sell_qty->sell_qty }}</b></td>
                                            <td align="right"><b>{{ $websetting->currency }} {{ $stock_price->stock_price }}</b></td>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection