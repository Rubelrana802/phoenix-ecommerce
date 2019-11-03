@extends('admin.master')

@section('title')
  Supplier Payment
@endsection

@section('content')
 	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Accounts</h1>
            <small>Supplier Payment</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                <li><a href="#">Accounts</a></li>
                <li class="active">Supplier Payment</li>
            </ol>
        </div>
    </section>

    <section class="content">
            <div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      Supplier Payment   
                    </h4>
                </div>
            </div>
            	<div class="panel-body">
            		<form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="supplier_payment">
            			@csrf
                        <div class="row">
                          	<div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker" value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_type" class="form-control" required=""  onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1">Cash Payment</option>
                                            <!-- <option value="2">Due Payment</option> -->
                                            <option value="3">Bank Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                                       
                            <div class="col-sm-6" id="name">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Supplier Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="supplier_name" class=" form-control" id="cname" tabindex="1" required="">
                                        	<option value="">Select One</option>
                                        	@foreach($suppliers as $supplier)
												<option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                        	@endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="mobile" class="col-sm-4 col-form-label">Mobile <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="mobile" class=" form-control" placeholder='Mobile' readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="bank_div" style="display: none;">
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-4 col-form-label">Bank <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <select style="width: 317px;" name="bank_id" class="form-control" required="" id="bank_id">
                                            <option value="">Select One</option>
                                            @foreach($banks as $bank)
                                                <option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="previous" class="col-sm-4 col-form-label">Remark <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <textarea  name="txtRemarks" id="txtRemarks" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="border-top:#333 1px solid;">
                        <div class="text-center" style="padding-bottom: 10px"><h3>Money Receive</h3></div>
                        <div class="row">
                        	<div class="col-sm-2"></div>
		                    <div class="col-sm-8">
		                        <div class="form-group row">
		                        	<label for="date" class="col-sm-2 col-form-label">Balance</label>
		                        	<div class="col-sm-4">
		                             	<input type="text" name="balance" id="previous" class="form-control text-right" value="" readonly="">
		                        	</div>
		                    	</div> 

			                    <div class="form-group row">
			                        <label for="date" class="col-sm-2 col-form-label">Receive Amount</label>
			                        <div class="col-sm-4">
			                            <input type="text" name="txtAmount" value="" class="form-control total_price text-right"  id="paid_amount" onkeyup="calculation(1)" required>
			                        </div>
			                    </div> 

			                    <div class="form-group row">
			                        <label for="due" class="col-sm-2 col-form-label">Due</label>
			                        <div class="col-sm-4">
			                             <input type="text" name="due" id="due_amount" class="form-control text-right" value="" readonly="">
			                        </div>
			                    </div> 
		                    </div>
                   		</div><br>
                
                        <div class="form-group row">
                           <div class="col-sm-7 text-right">
                            	<input type="submit" id="add_receive" class="btn btn-success btn-large" name="save" value="Submit" tabindex="6"/>
                            </div>
                        </div>
                  	</form>            
              	</div>  
        	</div>
    	</div>
	</div>
</section>

<script>
	$("#supplier_payment").validate();
</script>

<script type="text/javascript">
    
    function bank_paymet(val){
        if(val==3){
           var style = 'block'; 
           document.getElementById('bank_id').setAttribute("required", true);
        }else{
    var style ='none';
    document.getElementById('bank_id').setAttribute("required", false);
        }
           
    document.getElementById('bank_div').style.display = style;
    }



    function calculation(sl) {
       
        var balance =  $("#previous").val();
        var paid    =  $("#paid_amount").val();
       var  due = + balance+ -paid;

        $("#due_amount").val(due.toFixed(2,2));
    }

    $(function(){
        $(".datepicker").datepicker({ dateFormat:'yy-mm-dd' });
       
    });



    function customer_due(id){
        $.ajax({
            url: '#',
            type: 'post',
            data: {customer_id:id}, 
            success: function (msg){
                  obj = JSON.parse(msg);
                $("#previous").val(obj.previous.toFixed(2,2));
                $("#cname").val(obj.cname);
                $("#address").val(obj.address);
                $("#vechicle_no").val(obj.vehicle);


            },
            error: function (xhr, desc, err){
                 alert('failed');
            }
        });        
    }
@endsection