<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
	<h2>Edit Employee</h2>
	<form method="post" action="{{ URL::to('update/'. $employee->id) }}">
		{{ csrf_field() }}
		<label for="">Name</label>
		<input type="text" name="name" value="{{ $employee->name }}">

		<label for="">Email</label>
		<input type="email" name="email" value="{{ $employee->email }}">

		<label for="">Date of Birth</label>
		<input type="date" name="date_of_birth" value="{{ $employee->birth_date }}">

		<label for="">Salary</label>
		<input type="number" name="salary" value="{{ $employee->salary }}">

		<button type="submit">Update</button>

	</form>
</body>
</html>