@extends('admin.master')

@section('title')
  Update Brand
@endsection

@section('content')
       <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Brand Edit</h1>
            <small>Brand Edit</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Brand</a></li>
                <li class="active">Brand Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        
        <!--Edit brand -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Brand Edit </h4>
                        </div>
                    </div>
                  <form action="{{ route('brand.update') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="brand_name" class="col-sm-3 col-form-label">Brand Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="brand_name" id="brand_name" type="text" placeholder="Brand Name"  required="" value="{{ $brands->brand_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="brand_image" class="col-sm-3 col-form-label">Brand Image <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="image" id="brand_image" type="file">
                                <img src="{{ asset('public/admin/brand/images/'.$brands->image) }}" height="100" width="100" class="img img-responsive" style="margin-top:5px">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="website" class="col-sm-3 col-form-label">Website <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="website" id="website" type="text" placeholder="Website"  required="" value="{{ $brands->website }}">
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="status" id="status">
                                    <option value=""></option>
                                    <option value="1" selected>Active</option>
                                    <option value="0" >Inactive</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="brand_id" value="{{ $brands->id }}">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="update_brand" class="btn btn-success btn-large" name="update_brand" value="Save Changes" />
                            </div>
                        </div>
                    </div>
                    </form>                </div>
            </div>
        </div>
    </section>
@endsection
