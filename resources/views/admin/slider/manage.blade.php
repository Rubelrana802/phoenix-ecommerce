@extends('admin.master')

@section('title')
  Manage Slider
@endsection

@section('content')
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Manage Slider</h1>
            <small>Manage your slider</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Web Settings</a></li>
                <li class="active">Manage Slider</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                  <a href="{{ url('/admin/slider/create') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Slider</a>

                </div>
            </div>
        </div>

        <!-- Manage Slider -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Slider</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Slider Link</th>
                                        <th>Slider Image</th>
                                        <th>Slider Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $i=0; ?>
                					@foreach($slider as $row)
                    				<tr class="text-center">
                        				<td>{{ ++$i }}</td>
                        				<td>{{ $row->slider_link }}</td>
                                        <td><img style="width: 80px; height: 80px;" src="{{ asset('public/admin/images/slider/'.$row->image) }}" alt=""></td>
                                        <td>{{ $row->position }}</td>
                        				<td>                                        		
                                       		<a class="btn btn-info btn-sm" href="{{ url('/admin/slider/'.$row->id).'/edit' }}"><i style="font-size: 16px;" class="fa fa-pencil" data-toggle="tooltip" title="Update"></i></a>
											
                                       		<a data-id="{{ $row->id }}" data-route="{{route('slider.destroy', $row->id)}}" class="deleteRecord btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                   		</td>                                                 
                    				</tr>
                    				@endforeach                                      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Manage Category End -->

@endsection
