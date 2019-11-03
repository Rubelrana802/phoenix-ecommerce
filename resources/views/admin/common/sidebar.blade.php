<aside class="main-sidebar">
  
    <!-- sidebar -->
    <div class="user-panel text-center">
            <div class="image">
                <img src="{{ asset('public/admin/dist/img/'.Auth::user()->image ) }}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

  <div class="sidebar">
    <ul class="sidebar-menu">
    @if(Auth::user()->admin == true )
      <li class="active">
        <a href="{{ url('/home') }}"> <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
          <span class="pull-right-container">
          <span class="label label-success pull-right"></span>
          </span>
        </a>
      </li>

    <!-- Invoice menu start -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file"></i> <span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('invoice.add') }}">New Invoice</a></li>
          <li><a href="{{ route('invoice.manage') }}">Manage Invoice </a></li>
          <li><a href="{{ route('invoice.pos') }}">POS Invoice</a></li>
        </ul>
      </li>
    <!-- Invoice menu end -->


    <!--New Account start-->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-money"></i><span>Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview"><a href="#">Chart of Account</a></li>
          <li class="treeview"><a href="{{ route('supplier.payment') }}">Supplier Payment</a></li>
          <li class="treeview"><a href="{{ route('customer.payment') }}">Customer Receive</a></li>
          <li class="treeview"><a href="#">Debit Voucher</a></li>
          <li class="treeview"><a href="#">Credit Voucher</a></li>
          <li class="treeview"><a href="#">Vouchar Approval</a></li> 
          <li class="treeview"><a href="#">Contra Voucher</a></li>
          <li class="treeview"><a href="#">Journal Voucher</a></li> 
          <li class="treeview">

            <a href=""style="position: relative;">Report<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview"><a href="#">Cash Book</a></li>
              <li class="treeview"><a href="#">Inventory Ledger</a></li>
              <li class="treeview"><a href="#">Bank Book</a></li>
              <li class="treeview"><a href="#">General Ledger</a></li>
              <li class="treeview"><a href="#">Trial Balance</a></li>
              <li class="treeview"><a href="#">Cash Flow</a></li>
              <li class="treeview"><a href="#">Coa Print</a></li>
            </ul>   

          </li>
        </ul>
      </li>
    <!-- New Account End -->

    <!-- Product menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-product-hunt" aria-hidden="true"></i></i><span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('product.add') }}">Add Product</a></li>
          <!-- <li><a href="#">Import product (CSV)</a></li> -->
          <li><a href="{{ route('product.manage') }}">Manage Product</a></li>
        </ul>
      </li>
    <!-- Product menu end -->


    <!-- Customer menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-handshake-o"></i><span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('customer.add') }}">Add Customer</a></li>
          <li><a href="{{ route('customer.manage') }}">Manage Customer</a></li>
          <li><a href="{{ route('customer.ledger') }}">Customer Ledger</a></li>
          <li><a href="{{ route('credit.customer') }}">Credit Customer</a></li>
          <li><a href="{{ route('paid.customer') }}">Paid Customer</a></li>
        </ul>
      </li>
    <!-- Customer menu end -->

    <!-- Supplier menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-user"></i></i><span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('supplier.add') }}">Add Supplier</a></li>
          <li><a href="{{ route('supplier.manage') }}">Manage Supplier</a></li>
          <li><a href="#">Supplier Ledger</a></li>
          <li><a href="#">Supplier Sales Details</a></li> 
        </ul>
      </li>
    <!-- Supplier menu end -->


    <!-- Purchase menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Purchase</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('purchase.add') }}">Add Purchase</a></li>
          <li><a href="{{ route('purchase.manage') }}">Manage Purchase</a></li>
        </ul>
      </li>
    <!-- Purchase menu end -->

    <!-- start return -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-retweet" aria-hidden="true"></i><span>Return</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('return.product') }}">Return</a></li>
            <li><a href="{{ route('customer.return') }}">Customer Return List</a></li>
            <li><a href="{{ url('/admin/return/supplier/list') }}">Supplier Return List</a></li>
        </ul>
      </li>

    <!-- return menu end -->   

    <!-- Stock menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-industry"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('purchase.stock.report') }}">Stock Report</a></li>
          <li><a href="{{ route('supplier.stock') }}">Stock Report (Supplier Wise)</a></li>
          <li><a href="{{ route('product.stock') }}">Stock Report (Product Wise)</a></li>
        </ul>
      </li>
    <!-- Stock menu end -->

  
    <!-- Report menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-file" aria-hidden="true"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Closing</a></li>
          <li><a href="#">Closing Report</a></li>
          <li><a href="{{ route('sale.purchase') }}">Todays Report</a></li>
          <li><a href="#">Todays Customer Receipt</a></li>
          <li><a href="{{ route('sales.report') }}">Sales Report</a></li>
          <li><a href="#">Due Report</a></li>
          <li><a href="#">Shipping Cost Report</a></li>
          <li><a href="{{ route('purchasereport') }}">Purchase Report</a></li>
          <li><a href="{{ route('products.wise.sale') }}">Sales Report (Product Wise)</a></li>
          <li><a href="#">Sales Report (Category wise)</a></li>          
        </ul>
      </li>
    <!-- Report menu end -->


    <!-- Bank menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-briefcase" aria-hidden="true"></i><span>Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('bank.add') }}">Add New Bank</a></li>
          <li><a href="{{ route('bank.transaction.add') }}">Bank Transaction</a></li>
          <li><a href="{{ route('bank.manage') }}">Manage Bank</a></li>
          <!-- <li><a href="{{ url('/bank/ledger') }}">Manage Ledger</a></li> -->
        </ul>
      </li>
    <!-- Bank menu end -->


    <!-- Comission start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-percent" aria-hidden="true"></i> <span>Commission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Generate Commssion</a></li>
        </ul>
      </li>
    <!-- Comission end -->


    <!-- Office loan start -->
      <li class="treeview">
        <a href="#">
             <i class="fa fa-university" aria-hidden="true"></i>
            <span>Office Loan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('office.add') }}">Add Person</a></li>
          <li><a href="{{ route('office.loan') }}">Add Loan</a></li>
          <li><a href="{{ route('office.payment') }}">Add Payment</a></li>
          <li><a href="{{ route('office.manage') }}">Manage Loan</a></li>
        </ul>
      </li> 
    <!-- Office loan end -->


    <!--  Personal loan start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span>Personal Loan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{ route('person.add') }}">Add Person</a></li>
          <li><a href="{{ route('person.loan') }}">Add Loan</a></li>
          <li><a href="{{ route('person.payment') }}">Add Payment</a></li>
          <li><a href="{{ route('person.manage') }}">Manage Loan</a></li>
        </ul>
      </li>
    <!--Personal loan end -->


    <!-- Software Settings menu start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-cog"></i><span>Software Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

          <!-- Category menu start -->
            <li class="treeview">
              <a href=""style="position: relative;">Category<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
            </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/category/create') }}">Add Category</a></li>
                <li><a href="{{ url('/admin/category') }}">Manage Category</a></li>
              </ul>
            </li>
          <!-- Category menu end -->

        <!-- Unit Start -->
          <li class="treeview">
            <a href=""style="position: relative;">Unit<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/admin/unit/create') }}">Add Unit</a></li>
              <li><a href="{{ url('/admin/unit') }}">Manage Unit</a></li>
            </ul>
          </li>
        <!-- Unit Start -->

        <!-- Tax start -->
          <li class="treeview">
            <a href=""style="position: relative;">Tax<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/admin/tax/create') }}">Add Tax</a></li>
              <li><a href="{{ url('/admin/tax') }}">Manage Tax</a></li>
            </ul>
          </li>
        <!-- End tax -->

        <!-- store menu start -->
          <li class="treeview">
            <a href=""style="position: relative;">Store<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/admin/store/add') }}">Add Store</a></li>
              <!-- <li><a href="#">Import store (CSV)</a></li> -->
              <li><a href="{{ url('/admin/store/manage') }}">Manage Store</a></li>
            </ul>
          </li>
        <!-- store menu end -->

          <li><a href="{{ route('company.manage') }}">Manage Company</a></li>
          <li><a href="{{ route('add.user') }}">Add User</a></li>
          <li><a href="{{ route('manage.user') }}">Manage Users </a></li>
          <li><a href="#">Currency </a></li>
          <li><a href="{{ url('/admin/company/websetting/edit/1') }}">Setting </a></li>
        </ul>
      </li>
    <!-- Software Settings menu end -->
         
    <!-- Role permission start -->
      <li class="treeview">
        <a href="#">
            <i class="fa fa-key"></i> <span>Role Permission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Add Role</a></li>
          <li><a href="#">Role List</a></li>
          <li><a href="#">User Assign Role</a></li>
        </ul>
      </li>
    <!-- Role permission End -->
@endif


<!-- user dashboard -->
@if(Auth::user()->admin == false )
            <li class=" ">
                <a href="http://..com/Demo_saleserpv9/"><i class="ti-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <span class="label label-success pull-right"></span>
                    </span>
                </a>
            </li>

            <!-- Invoice menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-layout-accordion-list"></i><span>Invoice</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Cinvoice">New Invoice</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Cinvoice/manage_invoice">Manage Invoice </a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Cinvoice/pos_invoice">POS Invoice</a></li>
                </ul>
            </li>
            <!-- Invoice menu end -->


<!--New Account start-->
             <li class="treeview  ">
                <a href="#">
                    <i class="fa fa-money"></i><span>Accounts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview  "><a href="http://.bdtask.com/Demo_saleserpv9/accounts/show_tree">Chart of Account</a></li>
                  <li class="treeview  "><a href="http://.bdtask.com/Demo_saleserpv9/accounts/supplier_payment">Supplier Payment</a></li>
                  <li class="treeview  "><a href="http://.bdtask.com/Demo_saleserpv9/accounts/customer_receive">Customer Receive</a></li>
              </li>
           <!-- New Account End -->

            <li class="treeview  ">
                <a href="#">
                    <i class="ti-tag"></i><span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccategory">Add Category</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccategory/manage_category">Manage Category</a></li>
                </ul>
            </li>
                    <!-- Category menu end -->
            <!-- Product menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-bag"></i><span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Cproduct">Add Product</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Cproduct/manage_product">Manage Product</a></li>
                </ul>
            </li>
            <!-- Product menu end -->

            <!-- Customer menu start -->
              <li class="treeview  ">
                <a href="#">
                    <i class="fa fa-handshake-o"></i><span>Customer</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccustomer">Add Customer</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccustomer/manage_customer">Manage Customer</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccustomer/credit_customer">Credit Customer</a></li>
                  <li><a href="http://.bdtask.com/Demo_saleserpv9/Ccustomer/paid_customer">Paid Customer</a></li>
                </ul>
            </li>
                    <!-- Customer menu end -->
            <!--Unit menu start--> 
                         <li class="treeview ">
                <a href="#">
                    <i class="fa fa-universal-access"></i><span>Unit</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                         <li><a href="http://.bdtask.com/Demo_saleserpv9/Cunit">Add Unit</a></li>
                                                </ul>
            </li>
                    <!--Unit menu close--> 
            <!-- Supplier menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-user"></i><span>Supplier</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                         <li><a href="http://.bdtask.com/Demo_saleserpv9/Csupplier">Add Supplier</a></li>
                                                      <li><a href="http://.bdtask.com/Demo_saleserpv9/Csupplier/manage_supplier">Manage Supplier</a></li>
                                                                              </ul>
            </li>
                    <!-- Supplier menu end -->

            <!-- Purchase menu start -->
                        <li class="treeview  ">
                <a href="#">
                    <i class="ti-shopping-cart"></i><span>Purchase</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                         <li><a href="http://.bdtask.com/Demo_saleserpv9/Cpurchase">Add Purchase</a></li>
                                                                <li><a href="http://.bdtask.com/Demo_saleserpv9/Cpurchase/manage_purchase">Manage Purchase</a></li>
                                       </ul>
            </li>
                    <!-- Purchase menu end -->            
            <!-- start return -->
              <li class="treeview  ">
                <a href="#">
                    <i class="fa fa-retweet" aria-hidden="true"></i><span>Return</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                         <li><a href="http://.bdtask.com/Demo_saleserpv9/Cretrun_m">Return</a></li>
                                                               <li><a href="http://.bdtask.com/Demo_saleserpv9/Cretrun_m/return_list">Stock Return List</a></li>
                                                               <li><a href="http://.bdtask.com/Demo_saleserpv9/Cretrun_m/supplier_return_list">Supplier Return List</a></li>
                                          
                </ul>
            </li>

            <!-- Tax menu start -->
                    
        <!-- Transection menu End -->


        <!-- Stock menu start -->
          <li class="treeview  ">
            <a href="#">
                <i class="ti-bar-chart"></i><span>Stock</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="http://.bdtask.com/Demo_saleserpv9/Creport">Stock Report</a></li>
              <li><a href="http://.bdtask.com/Demo_saleserpv9/Creport/stock_report_supplier_wise">Stock Report (Supplier Wise)</a></li>
              <li><a href="http://.bdtask.com/Demo_saleserpv9/Creport/stock_report_product_wise">Stock Report (Product Wise)</a></li>
            </ul>
          </li>
            <!-- Stock menu end -->

            <!-- Bank menu start -->
            <li class="treeview  ">
                <a href="#">
                    <i class="ti-briefcase"></i><span>Bank</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://.bdtask.com/Demo_saleserpv9/Csettings/index">Add New Bank</a></li>
                    <li><a href="http://.bdtask.com/Demo_saleserpv9/Csettings/bank_list">Manage Bank</a></li>
                </ul>
            </li>
          @endif
        </ul>
    </div> <!-- /.sidebar -->
</aside >

