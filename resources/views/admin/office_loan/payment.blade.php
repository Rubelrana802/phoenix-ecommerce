@extends('admin.master')

@section('title')
  Add Payment
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Payment</h1>
            <small>Add Payment</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Personal Payment</a></li>
                <li class="active">Add Payment</li>
            </ol>
        </div>
    </section>

    <section class="content">
         <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('office.add') }}" class="btn btn-info m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Person </a>
                    <a href="{{ route('office.loan') }}" class="btn btn-success m-b-5 m-r-2"><i class="fa fa-plus"> </i> Add Loan </a>
                    <a href="{{ route('office.manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i> Manage Loan </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Loan </h4>
                        </div>
                    </div>
                   <form action="{{ route('office.paymentsave') }}" class="form-vertical" id="inflow_entry" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select required class="form-control" name="person_id" id="name" tabindex="1">
                                    <option>Select One</option>
                                    @foreach($offices as $office)
                                        <option value="{{ $office->id }}">{{ $office->person_name }} | {{ $office->person_phone }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" min="0" tabindex="3"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control datepicker" name="date" id="date" value="{{ date('Y-m-d') }}" placeholder="Date" tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Details <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" placeholder="Details" tabindex="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="6"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save" tabindex="7"/>
                            </div>
                        </div>
                    </div>
                    </form>                </div>
            </div>
        </div>
    </section>
	
@endsection




<script type="text/javascript">
    //Phone select by ajax start
    $('body').on('change','#name',function(event){
        event.preventDefault(); 
        var person_id=$('#name').val();
        var csrf_test_name=  $("[name=csrf_test_name]").val();
        $.ajax({
            url: '#',
            type: 'post',
            data: {person_id:person_id,csrf_test_name:csrf_test_name}, 
            success: function (msg){
                $(".phone").val(msg);
            },
            error: function (xhr, desc, err){
                 alert('failed');
            }
        });        
    });
    //Phone select by ajax end
</script>
  
