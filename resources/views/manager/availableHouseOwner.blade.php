<!DOCTYPE html>
<html>

<head>
	<title>Owners</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/manager.css">
</head>

<body>
	<div>
		<h2>Owners</h2>
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
	<a href="/manager/spamAds">Spam Ads</a><br>

	<table border="1">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>USERNAME</td>
			<td>Email</td>
			<td>Phone</td>
			<td>Nid</td>
            <td>status</td>
            <td>Action</td>
		</tr>
		@foreach($users as $user)
			<tr>
				<td>{{$user->fname}}</td>
				<td>{{$user->lname}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->nid}}</td>
                @if($user->status=='Blocked')
                <td  style="color:red;">{{$user->status}}</td>
                @else 
                <td  style="color:green;">{{$user->status}}</td>
                @endif
				<td>
                    <a onclick="return confirm('Are you sure?')" href="{{route('manager.acceptCustomer', $user->username)}}">Review</a> |
                    @if($user->status=='Blocked')
                      <a onclick="return confirm('Are you sure?')" href="{{route('manager.unblockOwner', $user->username)}}">Unblock</a>
                    @else       
                    <a onclick="return confirm('Are you sure?')" href="{{route('manager.blockOwner', $user->username)}}">block</a>
                    @endif
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