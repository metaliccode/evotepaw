 <?php
	include('../config/config.php');
	if($_POST['tambah']){
		$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
//		$file_name		= $_FILES['file']['name'];
		$file_ext		= strtolower(end(explode('.', $file_name)));
//		$file_size		= $_FILES['file']['size'];
		$file_tmp		= $_FILES['file']['tmp_name'];
		
		$nama			= $_POST['nama'];
		$nama_calon		= $_POST['nama_calon'];	
		$nim			= $_POST['nim'];	
		$ipk			= $_POST['ipk'];
		$visi			= $_POST['visi'];
		$misi			= $_POST['misi'];
		//$tgl			= date("Y-m-d");
		
		if(in_array($file_ext, $allowed_ext) === true){
			if($file_size < 1044070){
				$lokasi = 'files/'.$nama.'.'.$file_ext;
				move_uploaded_file($file_tmp, $lokasi);
				$in = mysql_query("INSERT INTO tb_calon VALUES(NULL, '$nama_calon', '$nim', '$ipk', '$visi', '$misi', '$lokasi')");
				if($in){
					echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
				}else{
					echo '<div class="error">ERROR: Gagal upload file!</div>';
				}
			}else{
				echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
			}
		}else{
			echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
		}
	}
/*
echo "ini proses";

if(isset($_POST['tambah'])){
	
	include('../config/koneksi.php');
	
	$nama_calon		= $_POST['nama_calon'];	
	$nim			= $_POST['nim'];	
	$ipk			= $_POST['ipk'];
	$visi			= $_POST['visi'];
	$misi			= $_POST['misi'];


	$file			= $_FILES['foto']['tmp_name'];
	$foto			= $_FILES['foto']['name'];
	$lokasi			= "files/$foto";
	move_uploaded_file($foto, $lokasi);

	$input = mysql_query("INSERT INTO tb_calon VALUES(NULL, '$nama_calon', '$nim', '$ipk', '$visi', '$misi', '$foto')") or die(mysql_error());
	
if($input){
		echo "<script>alert('Data Berhasi Ditambahkan !');window.location='ps-formulir.php';</script>";
	}else{
		echo "<script>alert('Data Gagal Ditambahkan !');window.location='../tb_delegasi.php';</script>";	
	}

}else{	
	//echo '<script>window.history.back()</script>';

}
*/	
?>


