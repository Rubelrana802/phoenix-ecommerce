@extends('admin.master')

@section('title')
  Add Slider
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Slider</h1>
            <small>Update your slider</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Web Settings</a></li>
                <li class="active">Add Slider</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        

        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                   <a href="{{ url('/admin/slider') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Slider</a>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Slider </h4>
                        </div>
                    </div>
                  <form action="{{ route('slider.store') }}" class="form-vertical" id="validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">                        
                        <div class="form-group row">
                            <label for="slider_link" class="col-sm-3 col-form-label">Slider Link <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="slider_link" id="slider_link" type="text" placeholder="Slider Link" required>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="slider_image" class="col-sm-3 col-form-label">Slider Image <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="image" id="slider_image" type="file" placeholder="Slider Image" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slider_position" class="col-sm-3 col-form-label">Slider Position <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="position" id="slider_position" type="number" placeholder="Slider Position" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-slider" class="btn btn-success btn-large" name="add-slider" value="Save Slider" />
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
  
