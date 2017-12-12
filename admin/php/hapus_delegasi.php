<?php
if(isset($_GET['id'])){
	
	include('../../config/koneksi.php');
	
	$id = $_GET['id'];
	
	$cek = mysql_query("SELECT id_delegasi FROM tb_delegasi WHERE id_delegasi='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM tb_delegasi WHERE id_delegasi='$id'");
		
		if($del){
			echo "<script>alert('Data Berhasi Dihapus !');window.location='../tb_delegasi.php';</script>";
			
		}else{
			echo "<script>alert('Gagal Mengahapus Data !');window.location='../tb_delegasi.php';</script>";		
		}	
	}
	
}else{
	echo '<script>window.history.back()</script>';
	
}
?>