<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/vendor/animate/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/vendor/select2/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/login/css/main.css') }}" />
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-30">
				<form class="login100-form validate-form" action="{{ url('/cekLogin') }}" method="post">
                    {{ csrf_field() }}

					<div class="login100-form-title p-t-5 p-b-5">
						LOGO
					</div>

					<span class="login100-form-title p-t-20 p-b-40">
						Login to your Account
					</span>

                    @if(\Session::has('alert'))
                        <div class="text-center w-full txt1 pb-5">
                            {{Session::get('alert')}}
                        </div>
                    @endif

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="useremail" placeholder="Username / Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

                    <div class="text-center w-full p-t-20 p-b-20">
                        <center>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <span class="text-light">{{ $errors->first('g-recaptcha-response') }}</span>
                        </center>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-50">
						<a href="#" class="txt1">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <script src="{{ url('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url('assets/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ url('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/login/vendor/select2/select2.min.js')}}"></script>
    <script src="{{ url('assets/login/js/main.js')}}"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="content">
        <h1>LOGIN</h1>
        <br/>
        @if(\Session::has('alert'))
            <div class="alert alert-danger">
                <div>{{Session::get('alert')}}</div>
            </div>
        @endif
        <br/>
        <form action="{{ url('/cekLogin')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Username/Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html> -->