<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login </title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <div class="login-form">
    <form method="post">
    {{csrf_field()}}
      <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
      <table>
        <tr>
          <td>Email</td>
          <td><input type="email" class="form-control" name="email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" class="form-control" name="password"></td>
        </tr>


      </table>
      <div class="form-group small clearfix">

      </div>

      <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Login">

    </form>
   
  </div>
</body>

</html>