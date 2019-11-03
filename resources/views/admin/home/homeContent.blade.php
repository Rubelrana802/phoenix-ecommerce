@extends('admin.master')

@section('title')
  Dashboard
@endsection

@section('content')

<section class="content-header">
    <div class="header-icon">
        <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
        <h1>Dashboard</h1>
        <small>Home</small>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="pe-7s-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>

    <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{ DB::table('customers')->count() }}</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                        <div class="small">Total Customer</div>
                        <div class="sparkline1 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{ DB::table('products')->count() }}</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                        <div class="small">Total Product</div>
                        <div class="sparkline1 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{ DB::table('suppliers')->count() }}</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                        <div class="small">Total Supplier</div>
                        <div class="sparkline1 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{ DB::table('invoices')->count() }}</span><span class="slight"> <i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                        <div class="small">Total Invoice</div>
                        <div class="sparkline1 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <hr>
        <!-- Second Counter -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;">
                                <img src="{{ asset('public/admin') }}/assets/images/pos_invoice.png" height="40" width="40" >
                                </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('invoice.pos') }}">Create POS Invoice</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/invoice.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('invoice.add') }}">Create New Invoice</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/product.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('product.add') }}">Add Product</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/customer.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('customer.add') }}">Add Customer</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Third Counter -->
        @if(Auth::user()->admin == true )
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/sale.png" height="40"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('sales.report') }}">Sales Report</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/purchase.png" height="40"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('purchasereport') }}">Purchase Report</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/stock.png" height="40"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('sales.report') }}">Stock Report</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="{{ asset('public/admin') }}/assets/images/account.png" height="40"></span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="{{ route('sales.report') }}">Stock Return</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <!-- This month progress -->
                <div class="col-sm-12 col-md-8">
                    <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Best Sales Product</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="lineChart" height="140"></canvas>
                                </div>
                            </div>
                </div>
                <!-- Total Report -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Todays Overview</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner">
                                <div class="message_widgets">

                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th>Last Sales</th>
                                            <th>TK 
                                                <?php 
                                                $lastsale = DB::table('invoices')->pluck('grand_total_amount')->last(); 
                                                echo $lastsale; 
                                                ?>
                                            </th>
                                        </tr>
                                                                                    
                                        <tr>
                                            <th>Last Purchase</th>
                                            <th>TK 
                                            <?php 
                                                $lastsale = DB::table('product_purchases')->pluck('grand_total_amount')->last(); 
                                                echo $lastsale; 
                                            ?>                                                
                                            </th>
                                        </tr>      
                                    </table>

                                    <table class="table table-bordered table-striped table-hover">
                                        
                                        <tr>
                                            <th>Today Sale</th>
                                            <th>TK 
                                                <?php 
                                                $current_date = date('Y-m-d');
                                                $lastsale = DB::table('invoices')
                                                ->where('date', $current_date)
                                                ->sum('grand_total_amount'); 
                                                echo $lastsale; 
                                                ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Today Purchase</th>
                                            <th>TK 
                                            <?php 
                                                $current_date = date('Y-m-d');
                                                $lastsale = DB::table('product_purchases')
                                                ->where('purchase_date', $current_date)
                                                ->sum('grand_total_amount'); 
                                                echo $lastsale; 
                                            ?>                                                
                                            </th>
                                        </tr>

                                    </table>

                                    <table class="table table-bordered table-striped table-hover">
                                        
                                        <tr>
                                            <th>Total Sales</th>
                                            <th>TK 
                                                <?php 
                                                $lastsale = DB::table('invoices')->sum('grand_total_amount'); 
                                                echo $lastsale; 
                                                ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Total Purchases</th>
                                            <th>TK 
                                            <?php 
                                                $lastsale = DB::table('product_purchases')->sum('grand_total_amount'); 
                                                echo $lastsale; 
                                            ?>                                                
                                            </th>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

    </section> <!-- /.content -->

@endsection

