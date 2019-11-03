@extends('admin.master')

@section('title')
  Update Unit
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Unit Edit</h1>
            <small>Unit Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Unit</a></li>
                <li class="active">Unit Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Unit Edit </h4>
                        </div>
                	</div>
                	<form method="post" action="{{ route('unit.update', $unit->id) }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="panel-body">
                    	<div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Unit Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="unit_name" id="category_name" type="text" placeholder="Unit Name"  required="" value="{{ $unit->unit_name }}">
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="status" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" value="{{ $unit->id }}" name="unit_id">
						<input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
@endsection
