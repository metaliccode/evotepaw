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
<body>
  	<div class="container">
    	<div class="card card-login mx-auto mt-5">
      	<div class="card-header text-center">Login Form</div>
      	<div class="card-body">
       	<form action="php/cek-login.php" method="POST">
	        <div class="form-group">
	        	<label>Username</label>
	            <input class="form-control" name="username" type="text" placeholder="Enter username">
	        </div>
	        <div class="form-group">
	            <label for="exampleInputPassword1">Password</label>
	        	<input class="form-control" name="password" type="password" placeholder="Password">
	        </div>
	        <input type="submit" name="login" class="btn btn-primary btn-block mt-5" value="login">
        </form>
        <div class="text-center">
          	<a class="d-block small mt-3" href="daftar.php">Daftar Akun</a>
          	<a class="d-block small" href="lupa_pwd.php">Lupa Password?</a>
        </div>
      </div>
    </div>
  	</div>
</body>
</html>