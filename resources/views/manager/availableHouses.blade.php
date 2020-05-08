<!DOCTYPE html>
<html>

<head>
	<title>Available Apartments</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/manager.css">
</head>

<body>
	<div>
		<h2>Available Apartments</h2>
	</div>

	<a href="/manager">Home</a>|
	<a href="/logout">Logout</a><br><br>
	<a href="/search">Search Home</a> <br>
	<a href="/manager/profile">Edit Profile</a><br>
	<a href="/manager/pendingCustomers">Pending Customer</a><br>
	<a href="/manager/pendingHouseowners">Pending Houseowners </a><br>
	<a href="/manager/view_Available">House to-let</a><br>
	<a href="/manager/view_Customers">Available customer</a><br>
	<a href="/manager/view_Owners">House Owners</a><br>
	<a href="/manager/view_Rented">Rented Apartments</a><br>

	<table border="1">
		<tr>
			<td>House Id</td>
            <td>House Name</td>
            <td>House Owner</td>
			<td>Division</td>
            <td>Area</td>
            <td>Adress</td>
            <td>Action</td>
        </tr>
        @foreach($houses as $house)
			<tr>
				<td>{{$house->houseid}}</td>
				<td>{{$house->housename}}</td>
				<td>{{$house->houseowner}}</td>
				<td>{{$house->division}}</td>
                <td>{{$house->area}}</td>
                <td>{{$house->address}}</td>
				<td>
                    <a onclick="return confirm('Are you sure?')" href="{{route('manager.acceptCustomer', $house->houseid)}}">spam</a>
				</td>
			</tr>
	    	@endforeach
			
	</table>
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