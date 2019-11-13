
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/lion-v2/lion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 22:54:37 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/web') }}/assets/img/favicon.png">
        <!-- toastr -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/bundle.css">
        <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/plugins.css">
        <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('public/web') }}/assets/css/responsive.css">
        <script src="{{ asset('public/web') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- header -->
        @include('web.common.header') 
        <!-- header end-->           
		
		<!--product area strt-->
        @yield('content')
		

		
		<!--newsletter area start-->
        @include('web.common.newsletter')
		<!--newsletter area end-->
		
		<!--footer area start-->
        @include('web.common.footer')
		<!--footer area end-->
		
		 <!-- modal area start --> 
         @include('web.common.modal')
         <!-- modal area end --> 
		
		
		<!-- all js here -->

        <script src="{{ asset('public/web') }}/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="{{ asset('public/web') }}/assets/js/popper.js"></script>
        <script src="{{ asset('public/web') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('public/web') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('public/web') }}/assets/js/main.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        

        <script>
            @if(Session::has('message'))
                var type="{{Session::get('alert-type','info')}}"

                switch(type){
                    case 'info':
                         toastr.info("{{ Session::get('message') }}");
                         break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
        </script>
    </body>
</html>
