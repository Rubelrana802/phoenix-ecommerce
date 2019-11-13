		<div class="newsletter_area">
		    <div class="container">
		        <div class="row align-items-center">
		            <div class="col-lg-2 col-md-6">
		                <div class="footer_logo">
		                    <a href="#"><img src="{{ asset('public/web') }}/assets/img/logo/logo.png" alt=""></a>
		                </div>
		            </div>
		            <div class="col-lg-3 col-md-6">
		                <div class="social_icone">
		                    <ul>
		                        <li><a href="#" title="facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a></li>
		                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
		                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
		                    </ul>
		                </div>
		            </div>
		            <div class="col-lg-7">
		                <div class="newslatter_inner fix">
		                    <h4>send Newsletters</h4>
		                    <form action="{{ route('subscribe.store') }}" method="post">
		                    	@csrf
		                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
		                        <button type="submit">Subscribe</button>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>