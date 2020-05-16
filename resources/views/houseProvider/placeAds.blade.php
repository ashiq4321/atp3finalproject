<!DOCTYPE html>
<html>

<head>
	<title>Place ads page</title>
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
					<h2 class="title">Place adsFORM</h2>
				</div>
				<div class="card-body">
					<form method="POST">
					    @csrf
						<div class="form-row m-b-55">
							<div class="name">House</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input">
											<input class="input--style-5" type="text" name="houseid"
												value="{{old('houseid')}}" required>
											<label class="label--desc">House id</label>
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input">
											<input class="input--style-5" type="text" name="housename"
												value="{{old('houseid')}}"required>
											<label class="label--desc">house name</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row m-b-55">
							<div class="name">Location</div>
							<div class="form-group">
								<label for="address_address">Address</label>
								<input type="text" id="address-input" name="address_address" class="form-control map-input">
								<input type="hidden" name="address_latitude" id="address-latitude" value="0" />
								<input type="hidden" name="address_longitude" id="address-longitude" value="0" />
							</div>
							<div id="address-map-container" style="width:100%;height:400px; ">
								<div style="width: 100%; height: 100%" id="address-map"></div>
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
						<div class="form-row m-b-55">
							<div class="name">User</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc">
											<div class="rs-select2 js-select-simple select--no-search">
												<select name="usertype" value="{{old('usertype')}}"required>
													<option disabled="disabled" selected="selected">Choose option
													</option>
													<option value="Customer">Customer</option>
													<option value="House Provider">House Provider</option>
												</select>
												<div class="select-dropdown"></div>
											</div>
											<label class="label--desc">usertype</label>
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc">
											<div class="rs-select2 js-select-simple select--no-search">
												<div class="input-group">
													<input class="input--style-5" value="{{old('username')}}"" type="text"
														name="username">
												</div>
												<div class="select-dropdown"></div>
											</div>
											<label class="label--desc">username</label>
										</div>
									</div>
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
							<h2>Already an existing user ?&nbsp;&nbsp;</h2>
							<a href="/login" class="btn btn--radius-2 btn--green" style="text-decoration: none">Sign
								In</a>
							<h2>For Manager Position</h2>
							<a href="/apply" class="btn--radius-2 btn--green" style="text-decoration: none">We Hire!</a> |
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
	<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/assets/js/mapInput.js"></script>
</body>

</html>