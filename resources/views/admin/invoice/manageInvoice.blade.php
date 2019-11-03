@extends('admin.master')
@section('title')
    Manage Invoice
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Invoice </h1>
            <small>Manage your invoice</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Invoice</a></li>
                <li class="active">Manage Invoice </li>
            </ol>
        </div>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('invoice.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> New Invoice </a>
                    <a href="{{ route('invoice.pos') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  POS Invoice </a>
                </div>
            </div>
        </div>

        <!-- date between search -->
            <div class="row">
            
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <div class="col-sm-8">
                        <form action="{{ route('invoice.manage.seacher') }}" class="form-inline" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group">
                                <label class="" for="from_date">Start Date</label>
                                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="{{ date('Y-m-d') }}" placeholder="Start Date" >
                            </div> 

                            <div class="form-group">
                                <label class="" for="to_date">End Date</label>
                                <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="End Date" value="{{ date('Y-m-d') }}">
                            </div>
                            <button type="submit" class="btn btn-success">Search </button>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row"> 
        </div>
        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Invoice </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL.</th>
                                        <th>Invoice No</th>
                                        <th>Customer Name</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                        <!-- <th class="text-right">Total Amount</th> -->
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i=0; ?>
                                    @foreach($invoices as $row)
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td><a href="{{ url('/invoice/inserted_data/'.$row->sell_invoice_no) }}">{{ $row->sell_invoice_no }}</a></td>
                                        <td>{{ $row->customer_name }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ date("d-M-Y", strtotime($row->date ))}}</td>
                                        <!-- <td class="text-right">{{ $websetting->currency }} {{ $row->grand_total_amount }}</td> -->
                                        <td class="text-center">
                                            <a class="btn btn-success btn-sm" href="{{ url('/admin/invoice/inserted_data/'.$row->sell_invoice_no) }}"><i style="font-size: 16px;" class="fa fa-window-restore" data-toggle="tooltip" title="Invoice"></i></a>

                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/invoice/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
                                                
                                            <a data-id="#" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="text-right"><b>Total Amount : </b></td><td class="text-right">{{ $websetting->currency }} {{ $totalamount->total }}</td><td></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="text-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

