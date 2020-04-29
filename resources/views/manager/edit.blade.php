<!DOCTYPE html>
<html>

<head>
	<title>Edit Profile</title>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
	<link rel="stylesheet" href="fonts/icomoon/style.css">

	<link rel="stylesheet" href="/css/bootstrap.min.css.min.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/jquery-ui.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">

	<link rel="stylesheet" href="/css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


	<link rel="stylesheet" href="/css/aos.css">

	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="site-wrap">
		<header class="site-navbar py-1" role="banner">

			<div class="container">
				<div class="row align-items-center">
					<h2 align='center'>Edit Profile</h2>
					<div class="col-10 col-md-8 d-none d-xl-block">
						<nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
							<ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
								<a class="mb-5 text-blue" href="/manager">Dashboard</a>|
								<a class="mb-5 text-blue" href="/search">Search Home</a>|
								<a class="mb-5 text-blue" href="/manager/profile">Edit Profile</a>|
								<a class="mb-5 text-blue" href="/manager/pendingCustomers">Pending Customer</a>|
								<a class="mb-5 text-blue" href="/manager/pendingHouseowners">Pending Houseowners</a>|
								<a class="mb-5 text-blue" href="/manager/view_Available">House to-let</a>|
								<a class="mb-5 text-blue" href="/manager/view_Customers">Available customer</a>|
								<a class="mb-5 text-blue" href="/manager/view_Owners">House Owners</a>|
								<a class="mb-5 text-blue" href="/manager/view_Rented">Rented Apartments</a>|
								<a class="mb-5 text-blue" href="/logout">Logout</a>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<h2>Edit information</h2>
		<form method="post" action="{{ route('manager.updateProfile', ['username' => $user->username])}}">
		@csrf
			<table class="table">
				<tbody>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" value="{{$user->fname}}" required></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value="{{$user->lname}}" required></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" value="{{$user->username}}" readonly></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="{{$user->email}}" required></td>
					</tr>
					<tr>
						<td>phone: </td>
						<td><input type="text" name="phone" value="{{$user->phone}}" required></td>
					</tr>
					<tr>
						<td>Address: </td>
						<td><input type="text" name="address" value="{{$user->address}}" required></td>
					</tr>
					<tr>
						<td>National ID: </td>
						<td><input type="text" name="nid" value="{{$user->nid}}" required></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" value="{{$user->password}}" required></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="cpassword" value="" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="update"></td>
					</tr>
				</tbody>
			</table>
            @method('PATCH')
		</form>
		@foreach($errors->all() as $error)
		{{$error}} <br>
	    @endforeach

	</div>
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.stellar.min.js"></script>
	<script src="/js/jquery.countdown.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/bootstrap-datepicker.min.js"></script>
	<script src="/js/aos.js"></script>
	<script src="/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>