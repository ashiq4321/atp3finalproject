<head>
	<title>Login page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/login/images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/login/css/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/assets/login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
				@csrf
					<span class="login100-form-title">
						Member Login
					</span>
					<h6>{{session('msg')}}</h6>
					<div class="wrap-input100 validate-input" data-validate="Valid username is required">
						<input class="input100" type="text" name="uname" value='{{session('username')}}' placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="/login/passrecover">
							Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/signup">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a><br />
						<a class="txt2" href="/">
							Back To Home
						</a>
					</div>
				</form>
				<h3>{{session('msg')}}</h3>
			</div>
		</div>
	</div>
	<script src="/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/login/vendor/select2/select2.min.js"></script>
	<script src="/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="/assets/login/js/main.js"></script>
</body>

</html>