<!DOCTYPE html>
<html>
<head>
	<title>Daftar Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="../css/bootstrap/bs-admin.css" rel="stylesheet">
</head>

<body>
  	<div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="card-header">Daftar Akun Calon Ketua Himatif</div>
      	<div class="card-body">
        <form action="php/ps-daftar.php" method="POST">
        	<div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" name="username" type="text" placeholder="Enter username">
          	</div>
          	
          	<div class="form-group">
            	<label for="exampleInputEmail1">Email</label>
            	<input class="form-control" name="email" type="email" placeholder="Enter email">
          	</div>
          	
          	<div class="form-group">
            	<div class="form-row">
              		<div class="col-md-6">
                		<label for="exampleInputPassword1">Password</label>
                		<input class="form-control" name="password" type="password" placeholder="Password">
              		</div>
              		<div class="col-md-6">
                		<label for="exampleConfirmPassword">Konfirmasi password</label>
                		<input class="form-control" name="password2" type="password" placeholder="Confirm password">
              		</div>
            	</div>
          	</div>
            <input class="btn btn-primary btn-block" name="daftar" type="submit" value="daftar"/>
          	<!--<a class="btn btn-primary btn-block" href="berhasil.php" type="submit" name="submit" value="daftar">Daftar</a>-->
        </form>
        <div class="text-center">
          	<a class="d-block small mt-3" href="halaman_login.php">Halaman Login</a>
          	<a class="d-block small" href="lupa_pwd.php">Lupa Password?</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>