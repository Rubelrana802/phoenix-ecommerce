@extends('admin.master')

@section('title')
  Update Company
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Company Edit</h1>
            <small>Edit your company information</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Software Settings</a></li>
                <li class="active">Company Edit</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Edit Company -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Company Edit </h4>
                        </div>
                    </div>
                    <form action="{{ route('company.update') }}" class="form-vertical" id="insert_customer" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="company_name" value="{{ $company->company_name }}" required tabindex="1"/>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="3" class="form-control" name="mobile" name="mobile" value="{{ $company->mobile }}"  placeholder="Mobile" required tabindex="2"/>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Address <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control input-description" tabindex="3" id="adress" name="address" required>{{ $company->address }}</textarea>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Email <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="email" tabindex="3" class="form-control" value="{{ $company->email }}" name="email" placeholder="Email" required tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Website <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="url" tabindex="3" class="form-control" value="{{ $company->website }}" name="website" placeholder="Website" required tabindex="5"/>
                            </div>
                        </div>

                        <input type="hidden" name="company_id" value="{{ $company->id }}" />

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-Customer" class="btn btn-success btn-large" name="add-Customer" value="Save Changes" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

@endsection
