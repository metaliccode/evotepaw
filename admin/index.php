<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<link href="../css/bootstrap/bs-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
  	<div class="container">
    	<div class="card card-login mx-auto mt-5">
      	<div class="card-header text-center">Login Admin Panel</div>
      	<div class="card-body">
        <form method="POST" action="php/ps-login.php">
	        <div class="form-group">
	        	<label for="username">Username</label>
	            <input class="form-control" name="username" type="text" placeholder="Username">
	        </div>
	        <div class="form-group">
	            <label for="password">Password</label>
	        	<input class="form-control" name="password" type="password" placeholder="Password">
	        </div>
	        <input type="submit" name="login" class="btn btn-primary btn-block mt-5" value="login">
        </form>
      </div>
    </div>
  	</div>
</body>
</html>