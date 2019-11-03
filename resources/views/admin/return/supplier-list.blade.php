@extends('admin.master')

@section('title')
  Supplier Return List
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Supplier Return List</h1>
            <small>Supplier Return List</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Return</a></li>
                <li class="active">Supplier Return List</li>
            </ol>
        </div>
    </section>


    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                     <a href="{{ route('return.product') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Supplier Return </a>
                </div>
            </div>
        </div>

        <!-- Manage Tax -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Supplier Return List</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Purchase No</th>
                                        <th>Supplier Name</th>
                                        <th>Date</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($returnList as $list)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><a href="{{ url('/admin/return/supplier/list/'.$list->return_no) }}">{{ $list->return_no }}</a></td>
                                        <td><a href="#">{{ $list->supplier_name }} </a></td>
                                        <td>{{ $list->return_date }}</td>
                                        <td class="text-right">{{ $websetting->currency }} {{ $list->grand_total }}</td>
                                        
                                        <td class="text-center">
                                            
                                            <a class="btn btn-success btn-sm" href="{{ url('/admin/return/supplier/list/'.$list->return_no) }}"><i style="font-size: 16px;" class="fa fa-window-restore" data-toggle="tooltip" title="Details"></i></a>
                                            
                                            <a data-id="{{ $list->id }}" data-route="#" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>                                                 
                                    </tr>
                                    @endforeach                                      
                                </tbody>
                                <tfooter><tr><td class="text-center" colspan="3"></td><td><b>Total :</b></td><td class="text-right"><b>{{ $websetting->currency }} {{ $grand_total->total }}</b>
                                </td><td></td></tr></tfooter>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Manage product End -->

@endsection