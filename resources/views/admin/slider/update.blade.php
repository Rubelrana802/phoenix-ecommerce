@extends('admin.master')

@section('title')
  Update Slider
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Update Slider</h1>
            <small>Update your slider</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Web Settings</a></li>
                <li class="active">Update Slider</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        
        <!--Update slider -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Update Slider </h4>
                        </div>
                    </div>
                	<form method="post" action="{{ route('slider.update', $slider->id) }}" class="form-vertical" id="category_update" enctype="multipart/form-data" accept-charset="utf-8">
					@csrf

                    <div class="form-group row">
                            <label for="slider_link" class="col-sm-3 col-form-label">Slider Link <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="slider_link" id="slider_link" type="text" placeholder="Slider Link" required value="{{ $slider->slider_link }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slider_position" class="col-sm-3 col-form-label">Slider Position <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="position" id="slider_position" type="number" placeholder="Slider Position" required value="{{ $slider->position }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slider_image" class="col-sm-3 col-form-label">Slider Image <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="image" id="slider_image" type="file" placeholder="Slider Image">

                                <img src="{{ asset('public/admin/images/slider/'.$slider->image) }}" height="80" width="80" class="img img-responsive">
                                
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

                        <input type="hidden" value="{{ $slider->id }}" name="slider_id">
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