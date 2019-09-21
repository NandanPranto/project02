<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<h2>Insert Employee</h2>
	<form method="post" action="{{ URL::to('store') }}">
		{{ csrf_field() }}
		<label for="">Name</label>
		<input type="text" name="name">

		<label for="">Email</label>
		<input type="email" name="email">

		<label for="">Date of Birth</label>
		<input type="date" name="date_of_birth">

		<label for="">Salary</label>
		<input type="number" name="salary">

		<button type="submit">Submit</button>

	</form>
</body>
</html>