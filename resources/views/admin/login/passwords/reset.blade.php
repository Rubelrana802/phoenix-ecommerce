
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from iwebcs.com/forget_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 08:48:39 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Reset</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('public/admin') }}/assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/admin') }}/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Bootstrap -->
        <link href="{{ asset('public/admin') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- pe-icon-7-stroke -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
        <!-- Theme style -->
        <link href="{{ asset('public/admin') }}/assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper" style="margin-top: -75px !important">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-refresh-2"></i>
                            </div>
                            <div class="header-title">
                                <h3>Password Reset</h3>
                                <small><strong>Please fill the form to recover your password</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="example@gmail.com">

                                @error('email')
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="help-block small">Your registered email address</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="username">New Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="******">

                                @error('password')
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="username">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="******">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-success btn-block m-b-10">Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('public/admin') }}/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('public/admin') }}/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from iwebcs.com/forget_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 08:48:39 GMT -->
</html>