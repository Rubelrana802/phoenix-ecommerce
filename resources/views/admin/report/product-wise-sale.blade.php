@extends('admin.master')

@section('title')
Sales Report Product Wise
@endsection

@section('content')
<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Sales Report (Product Wise)</h1>
            <small>Sales Report (Product Wise)</small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Report</a></li>
                <li class="active">Sales Report (Product Wise)</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Sales Report </a>
                    <a href="#" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Purchase Report </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Sales Report (Product Wise) </a>
                    <a href="#" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Profit Report (Invoice Wise) </a>
                </div>
            </div>
        </div>

        <!-- Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <form action="#" class="form-inline" method="get" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label class="" for="from_date">Start Date</label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date"  value="{{ date('Y-m-d') }}">
                        </div> 

                        <div class="form-group">
                            <label class="" for="to_date">End Date</label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" value="{{ date('Y-m-d') }}">
                        </div>  

                        <button type="submit" class="btn btn-success">Search</button>
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
                            <h4>Sales Report (Product Wise)</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" style="margin-top: 10px;">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sales Date</th>
                                        <th>Product Name</th>
                                        <th>Product Model</th>
                                        <th>Customer Name</th>
                                        <th align="center">Rate</th>
                                        <th class="text-right">Total Amount</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($productsale as $product)
                                    	<tr>
	                                        <td class="text-center">{{ date("d-M-Y", strtotime($product->date ))}}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->model }}</td>
                                            <td>{{ $product->customer_name }}</td>
                                            <td class="text-center">{{ $product->rate }}</td>
                                            <td class="text-right">{{ $websetting->currency }} {{ $product->grand_total_amount }}</td>
	                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" align="right" style="text-align:right;font-size:14px !Important">&nbsp; <b>Total Amount</b></td>
                                        <td style="text-align: right;"><b>{{ $websetting->currency }} {{ $grand_total_amount->grand_total_amount}}</b></td>
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