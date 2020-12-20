<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	


		<form method="post" enctype="multipart/form-data" action="{{route('student.add')}}">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create User</legend>
			<table>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="name" ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" ></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="Password" ></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><input type="text" name="type" ></td>
				</tr>
				<tr>
					<td>Dp</td>
					<td><input type="text" name="dp" ></td>
				</tr>
				
				
				<tr>
					<tr>
					<td>Status</td>
					<td><input type="text" name="ststus" ></td>
				</tr>

				<tr>
					<tr>
					<td>CGPA</td>
					<td><input type="text" name="cgpa" ></td>
				</tr>

				<tr>
					<tr>
					<td>Department</td>
					<td><input type="text" name="department" ></td>
				</tr>

				<tr>
					<tr>
					<td>DOB</td>
					<td><input type="text" name="ststus" ></td>
				</tr>
				<tr>
					<tr>
					<td>admission date</td>
					<td><input type="text" name="admission_date" ></td>
				</tr>
				<tr>
					<tr>
					<td>student status</td>
					<td><input type="text" name="student_status" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>

			</table>
			</fieldset>
		</form>

		
</body>
</html>