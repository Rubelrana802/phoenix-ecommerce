@extends('admin.master')

@section('title')
  Return
@endsection

@section('content')

	<section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Return form</h1>
            <small>Return form</small>
           
        </div>
    </section>

    <section class="content">
        
		 <div class="row">
            <div class="col-sm-12">
                <div class="column">
            		<a href="{{ route('customer.return') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Customer Return</a>
                    <a href="{{ route('supplier.return') }}" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Supplier Return </a>
                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="fa fa-tasks"> </i>  Wastage List </a>
                </div>
            </div>
        </div>
         <!-- Add Product Form -->
         <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <form action="{{ route('return.sell.product') }}" class="form-inline" method="post" accept-charset="utf-8" id="sales_inoicese">
                        @csrf
                            <div class="form-group">
                                <label for="to_date">Enter Your Invoice No:</label>
                                <input type="text" name="invoice_id" class="form-control" id="to_date" placeholder="Invoice No" required="required">
                            </div>  

                            <button type="submit" class="btn btn-success">Search</button>
                       </form>                    
                   </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                      <div class="panel-body"> 
                        <form action="{{ route('return.purchase.product') }}" class="form-inline" method="post" accept-charset="utf-8" id="purchase_return_f">
                        @csrf
                            <div class="form-group">
                                <label for="to_date">Enter Your Purchase No:</label>
                                <input type="text" name="purchase_id" class="form-control" id="to_date" placeholder="Purchase No" required="required">
                            </div>  

                            <button type="submit" class="btn btn-success">Search</button>
                       </form>                    
                   	</div>
                </div>
            </div>
        </div>       
    </section>

    

@endsection

