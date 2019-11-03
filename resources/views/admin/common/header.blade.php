<header class="main-header"> 
    <a href="{{ url('/home') }}" class="logo"> <!-- Logo -->
        <span class="logo-mini">
            <!--<b>A</b>BD-->
            <img src="{{ asset('public/admin') }}/assets/images/logo.png" alt="">
        </span>

        <span class="logo-lg">
            <!--<b>Admin</b>BD-->
            <img src="{{ asset('public/admin') }}/assets/images/logo.png" alt="">
        </span>
    </a>
    <!-- Header Navbar -->


    <nav class="navbar navbar-static-top text-center">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
            <span class="sr-only">Toggle navigation</span>
            <span class="pe-7s-keypad"></span>
        </a>
        <a href="{{ route('invoice.add') }}" class="btn btn-success btn-outline" style=""><i class="fa fa-file"></i> Invoice</a>
        <a href="{{ route('customer.payment') }}" class="btn btn-success btn-outline" style=""><i class="fa fa-money"></i> Receive</a>
        <a href="{{ route('supplier.payment') }}" class="btn btn-success btn-outline" style=""><i class="fa fa-paypal" aria-hidden="true"></i> Payment</a>
        <a href="{{ route('purchase.add') }}" class="btn btn-success btn-outline" style=""><i class="fa fa-shopping-cart"></i> Purchase</a>
 
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="#" >
                        <i class="pe-7s-attention" title="Out Of Stock"></i>
                        <span class="label label-danger">0</span>
                    </a>
                </li>
                <!-- settings -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user.profile') }}"><i class="pe-7s-users"></i>User Profile</a></li>
                        <li><a href="{{ route('user.password') }}"><i class="pe-7s-settings"></i>Change Password</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="pe-7s-key"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>