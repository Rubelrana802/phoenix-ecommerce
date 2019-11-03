    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Favicon and touch icons -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.png') }}" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png') }}">
        <!-- Start Global Mandatory Style-->

        <!-- toastr -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <!-- jquery-ui css -->
        <link href="{{ asset('public/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="{{ asset('public/admin/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- modals css -->
        <link href="{{ asset('public/admin/assets/plugins/modals/component.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link href="{{ asset('public/admin/assets/css/cmxform.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <!-- Data Tables -->
        <link href="{{ asset('public/admin/assets/plugins/datatables/dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="{{ asset('public/admin/assets/dist/css/stylephoenix.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/admin/assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ asset('public/admin/assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        
    </head>
