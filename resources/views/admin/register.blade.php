<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('favicon_ie9.ico') }}">

<title>Đăng ký</title>

<!-- Bootstrap -->
<link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- Animate.css -->
<link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">

<!-- datepicker -->
<link href="{{ asset('datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">

<link href="{{ asset('admin/build/css/customTheme.css') }}" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a> <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div id="register" class="animate form login_form">
                <section class="login_content register_content">
                    <form action="{{ route('register') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h1>Đăng ký</h1>
                        <div class="register_input">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}"/>
                            @if($errors->first('username'))
                            <p class="text-danger">{{$errors->first('username')}}</p>
                            @endif
                        </div>
                        <div class="register_input">
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"/>
                            @if($errors->first('email'))
                            <p class="text-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="register_input">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                            @if($errors->first('password'))
                            <p class="text-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="register_input">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repassword" />
                            @if($errors->first('repassword'))
                            <p class="text-danger">{{$errors->first('repassword')}}</p>
                            @endif
                        </div>
                        <div class="register_input">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}"/>
                            @if($errors->first('phone'))
                            <p class="text-danger">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                        <div class="register_input">
                            <input name="birthday" class="form-control" id="dob" placeholder="Birthday" value="{{ old('birthday') }}">
                            @if($errors->first('birthday'))
                            <p class="text-danger">{{$errors->first('birthday')}}</p>
                            @endif
                        </div>
                        <br/>
                        <div>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">
                                Đã có tài khoản? <a href="{{ route('login') }}" class="to_register"> Đăng nhập</a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('datepicker/bootstrap-datepicker.js') }}"></script>
    <script>
      $("#dob").datepicker();
    </script>
</body>
</html>
