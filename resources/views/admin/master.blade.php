<!DOCTYPE html>
<html>


	@include('admin.common.meta')

    <body class="hold-transition sidebar-mini">
        <div class="se-pre-con"></div>

        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Admin header end -->
	<style type="text/css">
    	.navbar .btn-success{
        	margin: 13px 2px;
    	}
	</style>

	@include('admin.common.header')

	@include('admin.common.sidebar')


	<script type="text/javascript">
    	$(document).ready(function () {
        	$("form :input").attr("autocomplete", "off");
    	})
	</script>            <!-- Admin Home Start -->
	<div class="content-wrapper">
	
	@yield('content')

	</div> <!-- /.content-wrapper -->

	@include('admin.common.scripts')

    </body>
</html>