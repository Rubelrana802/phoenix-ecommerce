
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Phoenix ERP</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('public/admin') }}/assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-144-precomposed.png"> 

        <!-- Bootstrap -->
        <link href="{{ asset('public/admin') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <!-- Pe-icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <!-- style css -->
        <link href="{{ asset('public/admin') }}/assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="post" id="loginForm" novalidate>
                        @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input id="email" placeholder="example@gmail.com" title="Please enter you username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input title="Please enter your password" placeholder="******" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span>Your strong password
                                    <a href="{{ route('password.request') }}"  data-toggle="modal" data-target="#passwordrecoverymodal"><b class="text-right">Forgot Password ??</b></a>
                                </span>
                            </div><br>
                            <div>
                                <button class="btn btn-success btn-block m-b-10">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

 

<!-- Modal -->
<div class="modal fade" id="passwordrecoverymodal" tabindex="-1" role="dialog" aria-labelledby="recoverylabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recoverylabel">Password Recovery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div id="outputPreview" class="alert hide modal-title" role="alert" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
      <div class="modal-body">
            @if (session('status'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

           <form action="{{ route('password.email') }}" id="passrecoveryform" method="post" accept-charset="utf-8">
                @csrf
                      <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Send">
      </div>
       </form>    </div>
  </div>
</div>
<!-- Admin login area end -->
 
    <script type="text/javascript">
        var checkoutFrm = $("#passrecoveryform");
        var outputPreview = $('#outputPreview');
        checkoutFrm.on('submit', function(e) {
            e.preventDefault(); 
            $.ajax({
            method: checkoutFrm.attr('method'),
                url   : checkoutFrm.attr('action'),
                data  :  checkoutFrm.serialize(),
                dataType: 'json',
                success: function(data) 
                {
                    if (data.status == true) {
                        outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-success').html(data.success);
                        setTimeout(function(){// wait for 5 secs(2)
            location.reload(); 
        }, 5000);
                    } else {
                        outputPreview.removeClass("hide").removeClass("alert-danger").addClass('alert-danger').html(data.exception);
                    }
                },
                error: function(xhr)
                {
                    alert('some error here!');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var info = $('table tbody tr');
            info.click(function() {
                var email    = $(this).children().first().text(); 
                var password = $(this).children().first().next().text();
                var user_role = $(this).attr('data-role');  

                $("input[type=email]").val(email);
                $("input[type=password]").val(password);
                $('select option[value='+user_role+']').attr("selected", "selected"); 
            });
        });
    </script>

    </div>

    <!-- jQuery -->
    <script src="{{ asset('public/admin') }}/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('public/admin') }}/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="{{ asset('public/admin/assets/js/select2.min.js') }}" type="text/javascript"></script>

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