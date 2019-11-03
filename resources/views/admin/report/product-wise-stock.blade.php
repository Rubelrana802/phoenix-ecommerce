
@extends('admin.master')

@section('title')
  Product Wise Stock
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
                        <div id="printableArea" style="margin-left:2px;">

                            <div class="table-responsive" style="margin-top: 10px;">
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i=0; ?>
                                    	@foreach($productstock as $stock)
                                    	<tr>
	                                        <td class="text-center">{{ ++$i }}</td>
	                                        <td align="center"><a href="{{ url('/admin/report/supplier/wise/'.$stock->id) }}">{{ $stock->product_name}}</a></td>
	                                        <td align="center">{{ $stock->model}} </td>
	                                        <td align="center">{{ $stock->purchase_qty}}</td>
	                                        <td align="center">{{ $stock->sell_qty }}</td>
	                                        <td align="center">{{ $stock->purchase_qty - $stock->sell_qty }}</td>
	                                        
                                        </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                             <td colspan="3" align="right"><b>Grand Total:</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty }}</b></td>
                                            <td align="center"><b>{{ $sell_qty->sell_qty }}</b></td>
                                            <td align="center"><b>{{ $purchase_qty->purchase_qty - $sell_qty->sell_qty }}</td>
                                            
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection