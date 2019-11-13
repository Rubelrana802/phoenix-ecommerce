@extends('web.master')

@section('title')
  Customer Checkout
@endsection

@section('content')  

	        <!--breadcrumbs area start-->
	    <div class="breadcrumbs_area contact_bread">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                    <div class="breadcrumb_content">
	                        <div class="breadcrumb_header">
	                            <a href="{{ route('home.page') }}"><i class="fa fa-home"></i></a>
	                            <span><i class="fa fa-angle-right"></i></span>
	                            <span> my account</span>
	                        </div>
	                        <div class="breadcrumb_title">
	                            <h2>my account</h2>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--breadcrumbs area end-->
       <!-- Start Maincontent  -->
            <section class="main_content_area my_account">
				<div class="container">
	                <div class="account_dashboard">
	                    <div class="row">
	                        <div class="col-sm-12 col-md-3 col-lg-3">
	                            <!-- Nav tabs -->
	                            <div class="dashboard_tab_button">
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                        <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                        <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                                        <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                        <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                        <li><a href="#" class="nav-link">logout</a></li>
                                    </ul>
                                </div>    
	                        </div>
	                        <div class="col-sm-12 col-md-9 col-lg-9">
	                            <!-- Tab panes -->
	                            <div class="tab-content dashboard_content">
	                                <div class="tab-pane fade show active" id="dashboard">
	                                    <h3>Dashboard </h3>
	                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
	                                </div>
	                                <div class="tab-pane fade" id="orders">
	                                    <h3>Orders</h3>
	                                    <div class="lion_table_area table-responsive">
	                                        <table class="table">
	                                            <thead>
	                                                <tr>
	                                                    <th>Order</th>
	                                                    <th>Date</th>
	                                                    <th>Status</th>
	                                                    <th>Total</th>
	                                                    <th>Actions</th>	 	 	 	
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <td>1</td>
	                                                    <td>May 10, 2018</td>
	                                                    <td><span class="success">Completed</span></td>
	                                                    <td>$25.00 for 1 item </td>
	                                                    <td><a href="cart.html" class="view">view</a></td>
	                                                </tr>
	                                                <tr>
	                                                    <td>2</td>
	                                                    <td>May 10, 2018</td>
	                                                    <td>Processing</td>
	                                                    <td>$17.00 for 1 item </td>
	                                                    <td><a href="cart.html" class="view">view</a></td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                                <div class="tab-pane fade" id="downloads">
	                                    <h3>Downloads</h3>
	                                    <div class="lion_table_area table-responsive">
	                                        <table class="table">
	                                            <thead>
	                                                <tr>
	                                                    <th>Product</th>
	                                                    <th>Downloads</th>
	                                                    <th>Expires</th>
	                                                    <th>Download</th>	 	 	 	
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                                <tr>
	                                                    <td>Shopnovilla - Free Real Estate PSD Template</td>
	                                                    <td>May 10, 2018</td>
	                                                    <td><span class="danger">Expired</span></td>
	                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
	                                                </tr>
	                                                <tr>
	                                                    <td>Organic - ecommerce html template</td>
	                                                    <td>Sep 11, 2018</td>
	                                                    <td>Never</td>
	                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="address">
	                                   <p>The following addresses will be used on the checkout page by default.</p>
	                                    <h4 class="billing-address">Billing address</h4>
	                                    <a href="#" class="view">Edit</a>
	                                    <p><strong>Bobby Jackson</strong></p>
	                                    <address>
	                                    	House #15<br>
	                                    	Road #1<br>
	                                    	Block #C <br>
	                                    	Banasree <br>
	                                    	Dhaka <br>
	                                    	1212
	                                    </address>
	                                    <p>Bangladesh</p>   
	                                </div>
	                                <div class="tab-pane fade" id="account-details">
	                                    <h3>Account details </h3>
	                                    <div class="login">
	                                        <div class="login_form_container">
	                                            <div class="account_login_form">
	                                                <form action="#">
	                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>
	                                                    <div class="input-radio">
	                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
	                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
	                                                    </div> <br>
	                                                    <label>First Name</label>
	                                                    <input type="text" name="first-name">
	                                                    <label>Last Name</label>
	                                                    <input type="text" name="last-name">
	                                                    <label>Email</label>
	                                                    <input type="text" name="email-name">
	                                                    <label>Password</label>
	                                                    <input type="password" name="user-password">
	                                                    <label>Birthdate</label>
	                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
	                                                    <span class="example">
	                                                      (E.g.: 05/31/1970)
	                                                    </span>
	                                                    <br>
	                                                    <span class="custom_checkbox">
	                                                        <input type="checkbox" value="1" name="optin">
	                                                        <label>Receive offers from our partners</label>
	                                                    </span>
	                                                    <br>
	                                                    <span class="custom_checkbox">
	                                                        <input type="checkbox" value="1" name="newsletter">
	                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
	                                                    </span>
	                                                    <div class="save_button primary_btn default_button">
	                                                        <a href="#">Save</a>
	                                                    </div>
	                                                </form>
	                                            </div>
	                                        </div>
			                            </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>       	
            </section>			
			<!-- End Maincontent  -->

@endsection