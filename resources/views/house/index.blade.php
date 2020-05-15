<!DOCTYPE html>
<html>

<head>
	<title>Search page</title>
</head>

<body>
    <h1>House information</h1>
    <table class="table">
			<tbody>
				<tr>
					<td>House Name:</td>
					<td>{{$house->housename}}</td>
				</tr>
				<tr>
					<td>Owners Name: </td>
					<td>{{$house->houseowner}}</td>
				</tr>
				<tr>
					<td>Division: </td>
					<td>{{$house->division}}</td>
				</tr>
				<tr>
					<td>Area:: </td>
					<td>{{$house->area}} </td>
				</tr>
				<tr>
					<td>Address: </td>
					<td>{{$house->address}} </td>
				</tr>
				<tr>
					<td>Size:: </td>
					<td>{{$house->size}} </td>
				</tr>
				<tr>
					<td>Description</td>
					<td>{{$house->description}} </td>
				</tr>
				<tr>
					<td>Price:</td>
					<td>{{$house->rent}} </td>
                </tr>
                <tr>
					<td>Review:</td>
					<td>{{$house->area}} </td>
                </tr>
                 
			</tbody>
		</table>
				@if($msg=='Select as interested')
				if you like it  <a href="{{route('house.selectAsInterested', $house->houseid)}}">{{$msg}}</a>
				@else 
				<h1 style="color:green;">you liked it</h1>
                <a  onclick="return confirm('Are you sure?')" href="{{route('house.selectAsNotInterested', $house->houseid)}}">Select as  not interested</a>
				@endif   
				<h1 style="color:green;">You can Contact with House Owner</h1>
				
	
</body>

</html>