<?php
include('php/cek-akses.php');
?>   

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <head>
	<title>Daftar Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
</head>
<body>


  <ul class="nav justify-content-end navbar navbar-expand-sm bg-dark navbar-dark">
    <li class="nav-item">
      <a class="nav-link" href=""></a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-primary" href="index.php">LOGOUT</a>
    </li>
  </ul>

<div class="container">
	<div class="card mt-5">
		<div class="card-header">Form Persyaratan Calon Ketua Himatif</div>
			<div class="card-body">
				<form method="POST" action="php/ps-formulir.php">
				<div class="form-row">
	              	<div class="col-md-6">
		                <label for="nama">Nama</label>
		                <input class="form-control" name="nama_calon" type="text" placeholder="Enter nama lengkap">
	            	</div>
		            <div class="col-md-3">
		                <label for="nim">NIM</label>
		                <input class="form-control" name="nim" type="text" placeholder="Enter NIM">
		            </div>
		            <div class="col-md-3">
		                <label for="ipk">IPK</label>
		                <input class="form-control" name="ipk" type="text" placeholder="Enter IPK">
		            </div>
            	</div>
          	
          	
		          	<div class="form-row">
		          		<div class="col-md-6">
			            	<label for="visi">VISI</label>
			            	<textarea class="form-control" rows="5" type="text" name="visi" placeholder="Enter VISI"></textarea> 
		          		</div>
		          		<div class="col-md-6">
			            	<label for="misi">MISI</label>
			            	<textarea class="form-control" rows="5" type="text" name="misi" placeholder="Enter MISI"></textarea> 
		          		</div>
		          	</div>
		          	
		          	<div class="form-group">
		            	<div class="form-row">
		              		<div class="col-md-6">
		                		<label for="foto">UPLOAD FOTO</label>
		                		<input class="form-control" type ="file" name="foto">
		                		<!--<?php 
		                		//	if (!empty($foto['foto'])){
								//		echo " <img src='php/file/$foto[foto]' width='100' height='100'>";
								//	}
								//	?>
								-->	
		              		</div>
		              		<div class="col-md-6">
		                		<label for="file">UPLOAD FILE</label>
		                		<p>Upload file Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 1 MB.</p>
		                		<input class="form-control" name="nama_file" type="text">
		                		<input class="form-control" name="file" type="file" value="tambah">
		              		</div>
		            	</div>
		          	</div>
		          	<input class="container btn btn-primary btn-block col-md-4 mt-5" type="submit" value="Submit" name="tambah" />
				</form>
			</div>
	</div>	
</div>  

</body>
</html>
