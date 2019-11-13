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
	                            <span> Checkout</span>
	                        </div>
	                        <div class="breadcrumb_title">
	                            <h2>Checkout</h2>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--breadcrumbs area end-->
       
         <!--Checkout page section-->
            <div class="Checkout_page_section">
                <div class="container">
                    <div class="row">
                       <div class="col-12">
                            <div class="customer-login mb-20">
                                <h3> 
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    Returning customer?
                                    <a class="Returning" href="#" data-toggle="collapse" data-target="#Returning_customer" aria-expanded="true">Click here to login</a>     
                                   
                                </h3>
                                 <div id="Returning_customer" class="collapse collapse_one" data-parent="#accordion">
                                    <div class="card-bodyfive">
                                        <div class="col-12">
                                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>  
                                        </div>
                                        <div class="col-lg-4">
                                            <form action="#">  
                                                <div class="Returning_cart_body mb-20">
                                                    <label>Username or email <span>*</span></label>
                                                    <input type="text">     
                                                </div>
                                                <div class="Returning_cart_body mb-20">
                                                    <label>Password  <span>*</span></label>
                                                    <input type="text">     
                                                </div> 
                                                <div class="Returning_cart_body">
                                                    <input value="Login" type="submit">
                                                    <label for="remember_box">
                                                        <input id="remember_box" type="checkbox">
                                                        <span> Remember me </span>
                                                    </label>     
                                                </div>
                                                <a href="#">Lost your password?</a>
                                            </form>          
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="customer-login mb-20">
                                <h3> 
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    Returning customer?
                                    <a class="Returning" href="#" data-toggle="collapse" data-target="#Returning_customer_one" aria-expanded="true">Click here to enter your code</a>     
                                   
                                </h3>
                                 <div id="Returning_customer_one" class="collapse collapse_one" data-parent="#accordion">
                                    <div class="card-bodyfive">
                                        <div class="checkout_coupon_code">
                                            <form action="#">
                                                <input placeholder="Coupon code" type="text">
                                                 <input value="Apply coupon" type="submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>    
                            </div>    
                       </div>
                    </div>
                    <div class="checkout_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <form action="#">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                      
                                        <div class="col-lg-6 mb-30">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">    
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label>Last Name  <span>*</span></label>
                                            <input type="text"> 
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label>Company Name</label>
                                            <input type="text">     
                                        </div>
                                        <div class="col-12 mb-30">
                                            <div class="select_form_select">
                                                <label for="c_country">country <span>*</span></label>
                                                <select name="cuntry" id="c_country"> 
                                                    <option value="2">bangladesh</option>      
                                                    <option value="3">Algeria</option> 
                                                    <option value="4">Afghanistan</option>    
                                                    <option value="5">Ghana</option>    
                                                    <option value="6">Albania</option>    
                                                    <option value="7">Bahrain</option>    
                                                    <option value="8">Colombia</option>    
                                                    <option value="9">Dominican Republic</option>   
                                                    
                                                </select>
                                            </div> 
                                        </div>
                                         
                                        <div class="col-12 mb-30">
                                            <label>Street address  <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">     
                                        </div>
                                        <div class="col-12 mb-30">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label>Town / City <span>*</span></label>
                                            <input  type="text">    
                                        </div> 
                                         <div class="col-12 mb-30">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">    
                                        </div> 
                                        <div class="col-lg-6 mb-30">
                                            <label>Phone<span>*</span></label>
                                            <input type="text"> 
                                               
                                        </div> 
                                         <div class="col-lg-6 mb-30">
                                            <label> Email Address   <span>*</span></label>
                                              <input type="text"> 
                                               
                                        </div> 
                                        <div class="col-12 mb-30">
                                            <input id="b_c_account" type="checkbox" data-target="createp_account" />
                                            <label class="righ_0" for="b_c_account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>
                                            
                                            <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <label> Account password   <span>*</span></label>
                                                    <input placeholder="password" type="password">  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-30">
                                            <input id="b__m__0account" type="checkbox" data-target="createp_account" />
                                            <label class="righ_1" for="b__m__0account" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>
                                            
                                            <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                               <div class="row">
                                                    <div class="col-lg-6 mb-30">
                                                        <label>First Name <span>*</span></label>
                                                        <input type="text">    
                                                    </div>
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Last Name  <span>*</span></label>
                                                        <input type="text"> 
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label>Company Name</label>
                                                        <input type="text">     
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <div class="select_form_select">
                                                            <label for="countru_name">country <span>*</span></label>
                                                            <select name="cuntry" id="countru_name"> 
                                                                <option value="2">bangladesh</option>      
                                                                <option value="3">Algeria</option> 
                                                                <option value="4">Afghanistan</option>    
                                                                <option value="5">Ghana</option>    
                                                                <option value="6">Albania</option>    
                                                                <option value="7">Bahrain</option>    
                                                                <option value="8">Colombia</option>    
                                                                <option value="9">Dominican Republic</option>   

                                                            </select>
                                                        </div> 
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <label>Street address  <span>*</span></label>
                                                        <input placeholder="House number and street name" type="text">     
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">     
                                                    </div>
                                                    <div class="col-12 mb-30">
                                                        <label>Town / City <span>*</span></label>
                                                        <input  type="text">    
                                                    </div> 
                                                     <div class="col-12 mb-30">
                                                        <label>State / County <span>*</span></label>
                                                        <input type="text">    
                                                    </div> 
                                                    <div class="col-lg-6 mb-30">
                                                        <label>Phone<span>*</span></label>
                                                        <input type="text"> 

                                                    </div> 
                                                     <div class="col-lg-6 mb-30">
                                                        <label> Email Address   <span>*</span></label>
                                                          <input type="text"> 

                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                 <label for="order_note">Order Notes</label>
                                                <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>    
                                        </div>     	    	    	    	    	    	    
                                    </div>
                                </form>    
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="order_form_two">
                                     <h3>Your order</h3> 
                                </div> 
                                <div class="order_wrapper">
                                    <div class="order-table table-responsive mb-30">
                                        <form action="#">  
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-name"> Handbag  fringilla <strong> × 2</strong></td>
                                                        <td class="amount"> $165.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-name">  Handbag  justo	 <strong> × 2</strong></td>
                                                        <td class="amount"> $50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-name">  Handbag elit	<strong> × 2</strong></td>
                                                        <td class="amount"> $50.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-name"> Handbag Rutrum	 <strong> × 1</strong></td>
                                                        <td class="amount"> $50.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Cart Subtotal</th>
                                                        <td>$215.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td><strong>$5.00</strong></td>
                                                    </tr>
                                                    <tr class="order_total">
                                                        <th>Order Total</th>
                                                        <td><strong>$220.00</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </form>         
                                    </div>
                                    <div class="payment-method">
                                       <div class="panel-default">
                                            <input id="payment_method" name="check_method" type="radio" data-target="createp_account" />
                                            <label class="righ_0" for="payment_method" data-toggle="collapse" data-target="#collapsepayment" aria-controls="collapsepayment">Create an account?</label>
                                            
                                            <div id="collapsepayment" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div> 
                                       <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                            <label class="righ_0" for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/visha/papyel.png" alt=""></label>
                                            
                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                   <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button  type="submit">Proceed to PayPal</button> 
                                        </div>    
                                    </div>    
                                </div>  
                            </div>
                        </div> 
                    </div>     
                </div>    
            </div>
            <!--Checkout page section end-->

@endsection