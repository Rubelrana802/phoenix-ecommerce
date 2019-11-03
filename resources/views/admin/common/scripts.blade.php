    @include('admin.common.footer');       


         <script src="{{ asset('public/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('public/admin/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        
        <script src="{{ asset('public/admin/assets/dist/js/frame.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline js -->
         <script src="{{ asset('public/admin/assets/plugins/sparkline/sparkline.min.js') }}" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="{{ asset('public/admin/assets/plugins/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <!-- dataTables js -->
        <script src="{{ asset('public/admin/assets/plugins/datatables/dataTables.min.js') }}" type="text/javascript"></script>

        <!-- Dashboard js -->
        <script src="{{ asset('public/admin/assets/dist/js/dashboard.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/plugins/chartJs/Chart.min.js') }}" type="text/javascript"></script>

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


        <script type="text/javascript">
            $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});

            // select 2 dropdown 
            $("select.form-control:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });

            //Insert supplier
            $("#insert_supplier").validate();
            $("#validate").validate();

            //Update supplier
            $("#supplier_update").validate();

            //Update customer
            $("#customer_update").validate();

            //Insert customer
            $("#insert_customer").validate();

            //Update product
            $("#product_update").validate();

            //Insert product
            $("#insert_product").validate();

            //Insert pos invoice
            $("#insert_pos_invoice").validate();

            //Insert invoice
            $("#insert_invoice").validate();

            //Update invoice
            $("#invoice_update").validate();

            //Insert purchase
            $("#insert_purchase").validate();

            //Update purchase
            $("#purchase_update").validate();

            //Add category
            $("#insert_category").validate();

            //Update category
            $("#category_update").validate();

            //Stock report
            $("#stock_report").validate();

            //Stock report
            $("#stock_report_supplier_wise").validate();
            //Stock report
            $("#stock_report_product_wise").validate();

            //Create account
            $("#create_account_data").validate();

            //Update account
            $("#update_account_data").validate();

            //Inflow entry
            $("#inflow_entry").validate();

            //Outflow entry
            $("#outflow_entry").validate();

            //Tax entry
            $("#tax_entry").validate();

            //Update tax
            $("#update_tax").validate();

            //Account summary
            $("#summary_datewise").validate();
            //Comission generate
            $("#commission_generate").validate();

             //invoice new
            $("#invoice_new").validate();
            $("#insert_user").validate();

        </script>

        <script>
                            //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "rgba(55, 160, 0, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(55, 160, 0, 0.5)",
                                pointHighlightStroke: "rgba(26,179,148,1)",
                                data: [16, 32, 18, 26, 42, 33, 44]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
        </script>


