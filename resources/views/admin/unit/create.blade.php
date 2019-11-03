@extends('admin.master')

@section('title')
  Add Unit
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Unit</h1>
            <small>Add new unit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Unit</a></li>
                <li class="active">Add Unit</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                      <a href="{{ url('/admin/unit') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Unit </a>
                
                </div>
            </div>
        </div>

        <!-- New Unit -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Unit </h4>
                        </div>
                    </div>
                    <form action="{{ route('unit.store') }}" class="form-vertical" id="insert_category" method="post" accept-charset="utf-8">
                    <div class="panel-body">
                    	 @method('POST')
					@csrf
                        <div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Unit Name <i class="text-danger">*</i></label>
                            <div class="col-sm-5">
                                <input class="form-control" name ="unit_name" id="unit_name" type="text" placeholder="Unit Name"  required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="Save" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>
<!-- End Category -->

@endsection
  
