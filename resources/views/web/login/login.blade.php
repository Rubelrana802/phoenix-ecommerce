@extends('web.master')

@section('title')
  Customer Login
@endsection

@section('content')         
        <!--breadcrumbs area start-->
	    <div class="breadcrumbs_area login_bread">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                    <div class="breadcrumb_content">
	                        <div class="breadcrumb_header">
	                            <a href="index.html"><i class="fa fa-home"></i></a>
	                            <span><i class="fa fa-angle-right"></i></span>
	                            <span> login</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--breadcrumbs area end-->
       
        <!-- accont area start -->
        <div class="account_area">
                <div class="container">
                    <div class="row">
                       <!--login area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form">
                                <div class="login_title">
                                    <h3>New Customers</h3> 
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                </div>
                                <div class="login_form login">
                                    <form action="#">
                                        <div class="login_input text-center">
                                            <h4>Don't have account? <a href="">SING UP</a> </h4>
                                            <h4>or Sign in with:</h4>
                                            <div class="row my-3 d-flex justify-content-center">
						    				<!--Google +-->
												<a href="login/google" class="btn btn-light google"><i class="fa fa-google-plus"></i>Login with Google</a>
			                				<!--Facebook-->
			                					<a href="login/facebook" class="btn btn-light facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
			                				</div>
                                        </div>
                                        <div class="login_submit">
                                            <button type="submit">login</button>
                                            <label for="remember">
                                                <input id="remember" type="checkbox">
                                                Remember me
                                            </label>
                                            <a href="#">Lost your password?</a>
                                        </div>
                                        
                                    </form>
                                </div>
                             </div>    
                        </div>
                        <!--login area start-->
                        
                        <!--register area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="login_title">
                                <h3>Registered Customers</h3>
								<p>If you have an account with us, please log in</p>
                            </div>
                            <div class="login_form login">
                                    <form action="#">
                                        <div class="login_input">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Passwords  <span>*</span></label>
                                            <input type="password">
                                        </div>
                                        <div class="login_submit">
                                            <button type="submit">login</button>
                                            <label for="remember">
                                                <input id="remember" type="checkbox">
                                                Remember me
                                            </label>
                                            <a href="#">Lost your password?</a>
                                        </div>
                                        
                                    </form>
                                </div>
                        </div>
                        <!--register area end-->
                    </div>
                </div>
            </div>
        <!-- accont area end -->

@endsection