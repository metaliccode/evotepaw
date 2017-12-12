<?php
include "koneksi.php";
class testlogin{


	public function login(){

		$username = "asdsad";
 		$password = "admin";
 
 		$cek = mysql_num_rows(mysql_query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'"));
 		$data = mysql_fetch_array(mysql_query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'"));

 		//$hasil = mysql_query($cek);
 	
 	IF($cek > 0){
  				
		$nilai = "berhasil";
	 	}else{
	  	
	  	$nilai = "gagal";
	 	}

	 	return $nilai;

	}
}



?>
