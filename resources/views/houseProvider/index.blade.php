<head>
	<title>House Provider page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Carlos Alvarez - Alvarez.is">

	<link rel="stylesheet" type="text/css" href="/assets/userProfile/bootstrap/css/bootstrap.min.css" />


	<link href="/assets/userProfile/css/main.css" rel="stylesheet">
	<link href="/assets/userProfile/css/font-style.css" rel="stylesheet">
	<link href="/assets/userProfile/css/flexslider.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/icomoon.css">


	<script type="text/javascript" src="/assets/userProfile/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/userProfile/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/assets/userProfile/js/lineandbars.js"></script>

	<script type="text/javascript" src="/assets/userProfile/js/dash-charts.js"></script>
	<script type="text/javascript" src="/assets/userProfile/js/gauge.js"></script>

	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="/assets/userProfile/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="/assets/userProfile/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="/assets/userProfile/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="/assets/userProfile/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="/assets/userProfile/js/noty/layouts/topCenter.js"></script>

	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="/assets/userProfile/js/noty/themes/default.js"></script>
	<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="/assets/userProfile/js/jquery.flexslider.js" type="text/javascript"></script>

	<script type="text/javascript" src="/assets/userProfile/js/admin.js"></script>

	<style type="text/css">
		body {
			padding-top: 60px;
		}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<script type="text/javascript">
		$(document).ready(function () {

			$("#btn-blog-next").click(function () {
				$('#blogCarousel').carousel('next')
			});
			$("#btn-blog-prev").click(function () {
				$('#blogCarousel').carousel('prev')
			});

			$("#btn-client-next").click(function () {
				$('#clientCarousel').carousel('next')
			});
			$("#btn-client-prev").click(function () {
				$('#clientCarousel').carousel('prev')
			});

		});

		$(window).load(function () {

			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: true,
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
</head>

<body>
	<div class="container">
	</div>
	<div class="navbar-nav navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-collapse collapse">
				<div class="navbar-header">
					<a class="navbar-brand" href="/manager"><img src="/assets/userProfile/images/logo30.png" alt="">
					{{session('uname')}} DASHBOARD </a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="/"><i class="icon-home icon-white"></i> Home rentel management
							system | Home </a></li>
					<li><a href="/manager/profile"><i class=" icon-user icon-white"></i> User</a></li>
					<li>
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown button
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</li>
					<li><a href="/search"><i class="glyphicon glyphicon-search"></i> Search Home</a></li>
					<li><a href="/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out </a></li>

				</ul>
			</div>
		</div>
	</div>
	<div class="site-wrap">
		<header class="site-navbar py-1" role="banner">

			<div class="container">
				<div class="row align-items-center">
					<h2 align='center'>manager home</h2>
					<div class="col-10 col-md-8 d-none d-xl-block">
						<nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
							<ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
								<a class="mb-5 text-blue" href="/manager">Home</a>|
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

		<h2>Personal information</h2>
		<table class="table">
			<tbody>
				<tr>
					<td>First Name:</td>
					<td><%= user.fname %></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><%= user.lname %></td>
				</tr>
				<tr>
					<td>Father's Name:</td>
					<td><%= user.fathersName %></td>
				</tr>
				<tr>
					<td>Assigned Area:</td>
					<td> <%= user.area %> %></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><%= user.email %></td>
				</tr>
				<tr>
					<td>phone: </td>
					<td><%= user.phone %></td>
				</tr>
				<tr>
					<td>National ID: </td>
					<td><%= user.nid %> </td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><%= user.password %></td>
				</tr>
			</tbody>
		</table>
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
</body>

</html>