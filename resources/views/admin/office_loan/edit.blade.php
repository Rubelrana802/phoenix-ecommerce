@extends('admin.master')

@section('title')
  Person Edit
@endsection

@section('content')
 	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Person Edit</h1>
            <small>Person Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Personal Loan</a></li>
                <li class="active">Person Edit</li>
            </ol>
        </div>
    </section>

<section class="content">
         <!-- Alert Message -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Person Edit </h4>
                    </div>
                </div>

	                <form action="{{ route('office.update') }}" class="form-vertical" id="inflow_entry" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	                   	@csrf
	                    <div class="panel-body">
	                    	<div class="form-group row">
	                            <label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
	                            <div class="col-sm-6">
	                                <input type="text" class="form-control" name="name" id="name" required="" placeholder="Name" value="{{ $offices->person_name }}" tabindex="1"/>
	                                
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="phone" class="col-sm-3 col-form-label">Phone <i class="text-danger">*</i></label>
	                            <div class="col-sm-6">
	                                <input type="number" class="form-control" name="phone" id="phone" required="" placeholder="Phone" value="{{ $offices->person_phone }}" tabindex="2"/>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="phone" class="col-sm-3 col-form-label">Email <i class="text-danger"></i></label>
	                            <div class="col-sm-6">
	                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $offices->email }}" tabindex="2"/>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="address" class="col-sm-3 col-form-label">Address <i class="text-danger"></i></label>
	                            <div class="col-sm-6">
	                                <textarea class="form-control" name="address" id="address"  placeholder="Address" tabindex="3">{{ $offices->person_address }}</textarea>
	                            </div>
	                        </div>

	                        <input type="hidden" name="person_id" value="{{ $offices->id }}">

	                        <div class="form-group row">
	                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
	                            <div class="col-sm-6">
	                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="4"/>
	                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save Changes" tabindex="5"/>
	                            </div>
	                        </div>
	                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
@endsection