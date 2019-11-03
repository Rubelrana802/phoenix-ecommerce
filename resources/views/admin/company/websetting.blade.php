@extends('admin.master')

@section('title')
Update Setting
@endsection

@section('content')

<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Update Setting</h1>
            <small>Update your web setting</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Software Settings</a></li>
                <li class="active">Update Setting</li>
            </ol>
        </div>
    </section>

<section class="content">
        
        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Update Setting </h4>
                        </div>
                    </div>
                    <form action="{{ route('web.update') }}" class="form-vertical" id="insert_customer" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        @csrf
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label">Logo <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <span class="input-group-addon btn default btn-file">
                                    <input name ="logo" id="logo" type="file" tabindex="1">
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{{ asset('public/admin/product/images/'.$websetting->logo) }}" class="img img-responsive" height="100" width="100">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label">Invoice Logo <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <span class="input-group-addon btn default btn-file">
                                    <input name ="invoice_logo" id="invoice_logo" type="file" tabindex="2">
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{{ asset('public/admin/product/images/'.$websetting->invoice_logo) }}" class="img img-responsive" height="100" width="100">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label">Favicon <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <span class="input-group-addon btn default btn-file">
                                    <input name ="favicon" id="favicon" type="file" tabindex="3">
                                <span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="{{ asset('public/admin/product/images/'.$websetting->favicon) }}" class="img img-responsive" height="100" width="100">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-sm-3 col-form-label">Currency <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency" id="currency" tabindex="5">
                                    <option value="TK" selected>Taka TK</option>
                                    <option value="৳" selected>Taka TK</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency_position" class="col-sm-3 col-form-label">Currency Position <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency_position" id="currency_position" tabindex="6">
                                    <option value="">Select One</option>
                                    <option value="0" selected>Left</option>
                                    <option value="1" >Right</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footer_text" class="col-sm-3 col-form-label">Footer Text <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="footer_text" id="footer_text" type="text" placeholder="Foter Text" value="{{ $websetting->footer_text }}" tabindex="7">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="language" class="col-sm-3 col-form-label">Language <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="language" class="form-control" id="language" tabindex="8">
                                    <option value="english">English</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lrt" class="col-sm-3 col-form-label">LTR/RTR <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="rtr" id="lrt" tabindex="9">
                                    <option value="">Select One</option>
                                    <option value="0" selected>LTR</option>
                                    <option value="1" >RTR</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="captcha" class="col-sm-3 col-form-label">Captcha <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="captcha" id="captcha" tabindex="10">
                                    <option value="">Select One</option>
                                    <option value="0" >Active</option>
                                    <option value="1" selected>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_key" class="col-sm-3 col-form-label">Captcha Site Key <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="site_key" id="site_key" type="text" placeholder="Captcha Site Key " value="{{ $websetting->site_key }}" tabindex="11">
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="secret_key" class="col-sm-3 col-form-label">Captcha Secret Key <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="secret_key" id="secret_key" type="text" placeholder="Captcha Secret Key" value="{{ $websetting->secret_key }}" tabindex="12">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="discount_type" class="col-sm-3 col-form-label">Discount Type <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="discount_type" id="discount_type" tabindex="10">
                                    <option value="">Select One</option>
                                    <option value="1" selected>Discount %</option>
                                    <option value="2" >Dis./Pcs.</option>
                                    <option value="3" >Fixed Dis.</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="wesetting_id" value="{{ $websetting->setting_id }}">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" value="Save Changes" tabindex="13"/>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>  
    </div> 
</section>

@endsection
