@extends('admin.master')

@section('title')
  Add Person
@endsection

@section('content')

	    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Person</h1>
            <small>Add Person</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Personal Loan</a></li>
                <li class="active">Add Person</li>
            </ol>
        </div>
    </section>

    <section class="content">
         <!-- Alert Message -->
        
         <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('person.loan') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Loan </a>
                    <a href="{{ route('person.payment') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Payment </a>
                    <a href="{{ route('person.manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Loan </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Person </h4>
                        </div>
                    </div>
                   <form action="{{ route('person.save') }}" class="form-vertical" id="inflow_entry" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" id="name" required="" placeholder="Name"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="phone" id="phone" required="" placeholder="Phone"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" id="email"  placeholder="email"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address"  placeholder="Address"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" />
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
	
@endsection
  
