<!DOCTYPE html>
<html>

<head>
	<title>apply page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">
	<link href="/assets/signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="/assets/signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
		rel="stylesheet">
	<link href="/assets/signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="/assets/signup/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	<link href="/assets/signup/css/main.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
		<div class="wrapper wrapper--w790">
			<div class="card card-5">
				<div class="card-heading">
					<h2 class="title">Apply FORM</h2>
				</div>
				<div class="card-body">
					<form method="POST" enctype="multipart/form-data">
					    @csrf
						<div class="form-row m-b-55">
							<div class="name">Name</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input">
											<input class="input--style-5" type="text" name="fname"
												value="{{old('fname')}}" required>
											<label class="label--desc">first name</label>
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input">
											<input class="input--style-5" type="text" name="lname"
												value="{{old('lname')}}"required>
											<label class="label--desc">last name</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row m-b-55">
							<div class="name">Location</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc">
											<div class="rs-select2 js-select-simple select--no-search">
												<select id="Area" value="Area" name="division"
													onchange="random_function()" required>
													<option disabled="disabled" selected="selected">Choose option
													</option>
													<option value="Barisal">Barisal</option>
													<option value="Chittagong">Chittagong</option>
													<option value="Dhaka"> Dhaka</option>
													<option value="Khulna">Khulna</option>
													<option value="Mymensingh">Mymensingh</option>
													<option value="Rajshahi">Rajshahi</option>
													<option value="Rangpur">Rangpur</option>
													<option value="Sylhet">Sylhet</option>
												</select>
												<div class="select-dropdown"></div>
											</div>
											<label class="label--desc">Division</label>
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc">
											<div class="rs-select2 js-select-simple select--no-search">
												<select id="area" name="area" value="area"
													onchange="random_function1()" required>
												</select>
												<div class="select-dropdown"></div>
											</div>
											<label class="label--desc">Area</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Address</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" value="{{old('address')}}" type="text" name="address"required>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Email</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="email" value="{{old('email')}}"name="email">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Phone</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="phone" value="{{old('phone')}}">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">National ID</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="nid" value="{{old('nid')}}">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Drop your Cv here</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="file" name="cv" value="{{old('cv')}}">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">username</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="username" value="{{old('username')}}">
								</div>
							</div>
						</div>
						<div class="form-row m-b-55">
							<div class="name">Password</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc">
											<input class="input--style-5" type="password" name="password"
												placeholder="enter password">
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc">
											<input class="input--style-5" type="password" name="cpassword"
												placeholder="Confirm password">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div>
							<button class="btn btn--radius-2 btn--red" type="submit">Register</button>
						</div>
						@foreach($errors->all() as $error)
							{{$error}} <br>
						@endforeach
						<h3>{{session('msg')}}</h3>

						<div class="form-row p-t-20">
							<h2>Already an existing manager ?&nbsp;&nbsp;</h2>
							<a href="/login" class="btn btn--radius-2 btn--green" style="text-decoration: none">Sign
								In</a>
							<a href="/" style="text-decoration: none; color: black">
								<h2> Back To Home <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> </h2>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		function random_function() {
			var a = document.getElementById("Area").value;
			if (a === "Chittagong") {
				var arr = ["Agrabad", "Chandgaon", "Chawkbazar", "Anderkilla", "GEC",
					"Khulshi"
				];
			} else if (a === "Dhaka") {
				var arr = ["Bashundhara", "Dhanmondi", "Banani", "Uttara", "Mirpur",
					"Nikunja"
				];
			}
			var string = "";

			for (i = 0; i < arr.length; i++) {
				string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
			}
			document.getElementById("area").innerHTML = string;
		}
	</script>
	<script src="/assets/signup/vendor/jquery/jquery.min.js"></script>
	<script src="/assets/signup/vendor/select2/select2.min.js"></script>
	<script src="/assets/signup/vendor/datepicker/moment.min.js"></script>
	<script src="/assets/signup/vendor/datepicker/daterangepicker.js"></script>
	<script src="/assets/signup/js/global.js"></script>
</body>

</html>