<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
<body>
	


		<form method="post" enctype="multipart/form-data" action="{{route('student.add')}}">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Add Student</legend>
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
					<td><input type="password" name="password" ></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><input type="radio" name="radio"  value="1">Student</td>
				</tr>
				<tr>
					<td>Dp</td>
					<td><input type="text" name="dp" ></td>
				</tr>
				
				
				<tr>
					<tr>
					<td>Status</td>
					<td><input type="text" name="status" ></td>
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
					<td><input type="text" name="dob" ></td>
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
					<td><input type="submit" name="submit" value="Add Student"></td>
				</tr>

			</table>
			</fieldset>
		</form>

		
</body>
</html>