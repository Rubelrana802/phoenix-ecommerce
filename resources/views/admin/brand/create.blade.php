@extends('admin.master')

@section('title')
  Add Brand
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Brand</h1>
            <small>Add new brand</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Brand</a></li>
                <li class="active">Add Brand</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="{{ route('brand.manage') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Brand</a>

                </div>
            </div>
        </div>

        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Brand </h4>
                        </div>
                    </div>
                  <form action="{{ route('brand.save') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="brand_name" class="col-sm-3 col-form-label">Brand Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="brand_name" id="brand_name" type="text" placeholder="Brand Name"  required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand_image" class="col-sm-3 col-form-label">Brand Image <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="image" id="brand_image" type="file" placeholder="Brand Image" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="website" class="col-sm-3 col-form-label">Website <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="website" id="website" type="url" placeholder="Website"  required="">
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-brand" class="btn btn-success  btn-large" name="add-brand" value="Save" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
  
