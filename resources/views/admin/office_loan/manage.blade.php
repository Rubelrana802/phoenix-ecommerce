@extends('admin.master')

@section('title')
  Manage Loan
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Person</h1>
            <small>Manage Person</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Personal Loan</a></li>
                <li class="active">Manage Person</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('office.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Person </a>
                    <a href="{{ route('office.loan') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Loan </a>
                    <a href="{{ route('office.payment') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Payment </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Person </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Balance</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0 ?>
                                    @foreach($offices as $office)
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        <td><a href="{{ url('/office/personwise/'.$office->id ) }}">{{ $office->person_name }} </a></td>
                                        <td>{{ $office->person_address }}</td>
                                        <td>{{ $office->person_phone }}</td>
                                        <td>{{ $office->email }}</td>
                                        <td align="right">{{ $websetting->currency}}
                                                    <?php 
                                                        

                                                        $total_debit = DB::table('office_loans')
                                                            ->select(DB::raw('SUM(debit) as debit'))
                                                            ->where('person_id', '=', $office->id)
                                                            ->first();

                                                        $total_credit = DB::table('office_loans')
                                                            ->select(DB::raw('SUM(credit) as credit'))
                                                            ->where('person_id', '=', $office->id)
                                                            ->first();

                                                            echo $total_debit->debit - $total_credit->credit;
 
                                                    ?>
                                                </td>
                                        <td class="text-center">
                                            <a href="{{ url('/admin/office/edit/'.$office->id ) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
@endsection




  
