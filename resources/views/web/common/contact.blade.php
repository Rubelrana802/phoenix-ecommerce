


@extends('web.master')

@section('title')
  Shop product
@endsection

@section('content')  

	        <!--breadcrumbs area start-->
	    <div class="breadcrumbs_area contact_bread contact">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                    <div class="breadcrumb_content">
	                        <div class="breadcrumb_header">
	                            <a href="{{ route('home.page') }}"><i class="fa fa-home"></i></a>
	                            <span><i class="fa fa-angle-right"></i></span>
	                            <span> Contact</span>
	                        </div>
	                        <div class="breadcrumb_title">
	                            <h2>Contact</h2>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!--breadcrumbs area end-->
    
	   <div class="contact_area mb-40">
	       <div class="container">
	           <div class="row">
	               <div class="col-lg-6 col-md-12">
	                   <div class="contact_message">
                            <div class="contact_title">
                                <h2>Contact Us</h2>   
                            </div>
                            <form id="contact-form" method="POST"  action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="name" placeholder="Name *" type="text">    
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="email" placeholder="Email *" type="email">    
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="subject" placeholder="Subject *" type="text">   
                                    </div>
                                     <div class="col-lg-6">
                                        <input name="phone" placeholder="Phone" type="text">   
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="contact_textarea">
                                            <textarea placeholder="Message *" name="details"  class="form-control2" ></textarea>     
                                        </div>   
                                        <button type="submit"> Send Message </button>  
                                    </div> 
                                    <div class="col-12">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>    
                        </div> 
	               </div>
	               <div class="col-lg-6 col-md-12">
	                   <div class="contact_info_wrapper">
                            <div class="contact_title">
                                <h4>contact us</h4>    
                            </div>
                            <div class="contact_info mb-15">
                                 <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                            </div>
                            <div class="contact_info mb-15">
                                <ul>
                                    <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                    <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                                    <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                                </ul>        
                            </div>  
                        </div> 
	               </div>
	           </div>
	       </div>
	   </div>

@endsection