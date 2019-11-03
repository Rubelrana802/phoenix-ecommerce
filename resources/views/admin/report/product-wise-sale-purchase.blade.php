@extends('admin.master')

@section('title')
  Product Report
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Product Report</h1>
            <small>Product sales and purchase report</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Product Report</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ route('product.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Product </a>

                    <a href="{{ route('product.manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Manage Product </a>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Product Details </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h2> <span style="font-weight:normal;">Product Name: </span><span style="color:#005580;">{{ $products->product_name }}</span></h2>
                        <h4> <span style="font-weight:normal;">Model:</span> <span style="color:#005580;">{{ $products->model }}</span></h4>
                        <h4> <span style="font-weight:normal;">Sales Price:</span> <span style="color:#005580;"> 
                                {{ $websetting->currency }} {{ $products-> 	sale_price }}</span></h4>
                        <h4> <span style="font-weight:normal;">Purchase Price:</span> <span style="color:#005580;"> 
                                {{ $websetting->currency }} {{ $products->supplier_price }}</span></h4>
                        <table class="table">
                            <tr>
                                <th>Total Purchase = <span style="color:#ff0000;"> 	{{ $products->purchase_qty }}</span></th>
                                <th>Total Sales = <span style="color:#ff0000;">  {{ $products->sell_qty }}</span></th>
                                <th>Stock = <span style="color:#ff0000;"> {{ $products->purchase_qty - $products->sell_qty }}</span></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Purchase Report </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th>Supplier Name</th>
                                        <th>Qnty</th>
                                        <th>Rate</th>
                                        <th style="text-align:right;">Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($purchases as $purchase)                                       
                                        <tr>
                                            <td>{{ date("d-M-Y", strtotime($purchase->purchase_date ))}}</td>
                                            <td>
                                                <a href="{{ url('/admin/report/purchase/invoice/'.$purchase->purchase_invoice_no) }}">
                                                    {{ $purchase->purchase_invoice_no }}
                                                </a>
                                            </td>
                                            <td>
                                                @foreach($suppliers as $supplier)
												<a href="{{ url('/admin/report/supplier/wise/'.$purchase->supplier_id )}}">
												{{ $supplier->id == $purchase->supplier_id ? $supplier->supplier_name : '' }}
												</a>
												@endforeach
                                            </td>
                                            <td  style="text-align:right;">{{ $purchase->quantity  }}</td>
                                            <td  style="text-align:right;">{{ $websetting->currency }} {{ $purchase->rate }}</td>
                                            <td style="text-align:right;"> {{ $websetting->currency }} {{ $purchase->total_amount }}</td>
                                        </tr>
                                    @endforeach                                      
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" style="text-align:right;"></td>
                                        <td style="text-align:right;"><b>Grand Total : </b></td>
                                        <td style="text-align:right;"><b> {{ $websetting->currency }} {{ $total_amount->amount - $discounts->discount }}</b></td>
                                    </tr>
                                </tfoot>

                                <tfoot>
                                    <tr>
                                        <td colspan="2" style="text-align:right;"></td>
                                        <td style="text-align:right;"><b> Total : </b></td>
                                        <td style="text-align:right;"><b>{{ $products->purchase_qty }}</b></td>
                                        <td style="text-align:right;"><b> Total Discount : </b></td>
                                        <td style="text-align:right;"><b> {{ $websetting->currency }} {{ $discounts->discount }}</b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Total sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Sales Report </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>

                                        <th>Invoice No</th>
                                        <th>Customer Name</th>
                                        <th>Qnty</th>
                                        <th>Rate</th>
                                        <th style="text-align:right;">Total Amount</th>
                                        <th style="text-align:right;">Invoice Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sales as $sale)
                                    <tr>
                                        <td>{{ date("d-M-Y", strtotime($sale->date ))}}</td>
                                        <td><a href="{{ url('/admin/invoice/inserted_data/'.$sale->sell_invoice_no) }}">{{ $sale->sell_invoice_no }}</a></td>
                                        <td><a href="#">{{ $sale->customer_name }}</a></td>
                                        <td  style="text-align:center;">{{ $sale->quantity }}</td>
                                        <td  style="text-align:right;"> {{ $websetting->currency }} {{ $sale->rate }}</td>
                                        <td style="text-align:right;"> {{ $websetting->currency }} {{ $sale->total_price }}</td>
                                        <td style="text-align:right;"> {{ $websetting->currency }} {{ $sale->grand_total_amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" style="text-align:right;"></td>
                                        <td class="text-right"><b>Total</b></td>
                                        <td  style="text-align:center;">{{ $total_quantity->quantity }}</td>
                                        <td colspan="2" class="text-right"><b>Grand Total</b></td>
                                        <td  style="text-align:right;"><b> {{ $websetting->currency }} {{ $total_grand_total_amount->grand_total_amount }}</b></td>
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