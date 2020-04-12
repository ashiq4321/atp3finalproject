<!DOCTYPE html>
<html>

<head>
	<title>sign up page</title>
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
					<h2 class="title">Sign Up FORM</h2>
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-row m-b-55">
							<div class="name">Name</div>
							<div class="value">
								<div class="row row-space">
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input"
											data-validate="<% if(error.fname!= null){error.fname.msg} %>">
											<input class="input--style-5" type="text" name="fname"
												value="<%= user.fname %>" required>
											<% if(error.address!= null){ %>
											<label><%= error.fname.msg %></label>
											<% } %>
											<label class="label--desc">first name</label>
										</div>
									</div>
									<div class="col-2">
										<div class="input-group-desc" class="wrap-input100 validate-input"
											data-validate="<% if(error.lname!= null){error.fname.msg} %>">
											<input class="input--style-5" type="text" name="lname"
												value="<%= user.lname %>" required>
											<% if(error.lname!= null){ %>
											<label><%= error.lname.msg %></label>
											<% } %>
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
												<select id="output" name="output" value="output"
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
									<input class="input--style-5" value="<%= user.address %>" type="text" name="address"
										required>
									<% if(error.address!= null){ %>
									<label><%= error.address.msg %></label>
									<% } %>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Email</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="email" value="<%= user.email %>" name="email">
									<% if(error.email!= null){ %>
									<label><%= error.email.msg %></label>
									<% } %>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">Phone</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="phone" value="<%=user.phone %>">
									<% if(error.phone!= null){ %>
									<label><%= error.phone.msg %></label>
									<% } %>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="name">National ID</div>
							<div class="value">
								<div class="input-group">
									<input class="input--style-5" type="text" name="nid" value="<%= user.nid %>">
									<% if(error.nid!= null){ %>
									<label><%= error.nid.msg %></label>
									<% } %>
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
												<select name="usertype" required>
													<option disabled="disabled" selected="selected">Choose option
													</option>
													<option value="Manager">Manager</option>
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
													<input class="input--style-5" value="<%= user.uname %>" type="text"
														name="username">
													<% if(error.uname!= null){ %>
													<label><%=error.uname.msg %></label><br>
													<% } %>
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

						<div class="form-row p-t-20">
							<h2>Already an existing customer?&nbsp;&nbsp;</h2>
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
				var arr = ["Agrabad", "Chandgaon R/A", "Chawkbazar", "Anderkilla", "GEC",
					"Khulshi"
				];
			} else if (a === "Dhaka") {
				var arr = ["Bashundhara R/A", "Dhanmondi R/A", "Banani", "Uttara", "Mirpur",
					"Nikunja"
				];
			}
			var string = "";

			for (i = 0; i < arr.length; i++) {
				string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
			}
			document.getElementById("output").innerHTML = string;
		}
	</script>
	<script src="/assets/signup/vendor/jquery/jquery.min.js"></script>
	<script src="/assets/signup/vendor/select2/select2.min.js"></script>
	<script src="/assets/signup/vendor/datepicker/moment.min.js"></script>
	<script src="/assets/signup/vendor/datepicker/daterangepicker.js"></script>
	<script src="/assets/signup/js/global.js"></script>
</body>

</html>