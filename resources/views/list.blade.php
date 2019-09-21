<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
						 <h2><c>List of all employees</c></h2>
			</div>
		</div>

	</div>
  
	<div class="container">
		<table class="table table-dark table-hover table-bordered">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Date of Birth</th>
				<th>Salary</th>
			</thead>
			<tbody>
				@foreach($employees as $e)
				<tr>
					<td>{{ $e->name }}</td>
					<td>{{ $e->email }}</td>
					<td>{{ $e->birth_date }}</td>
					<td>{{ $e->salary }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>