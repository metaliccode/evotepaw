<?php
include('../../config/koneksi.php');
IF(ISSET($_POST['login'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $cek = mysql_num_rows(mysql_query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'"));
 $data = mysql_fetch_array(mysql_query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'"));
 IF($cek > 0)
 	{
  
	  session_start();
	  $_SESSION['username'] = $data['username'];
	  $_SESSION['password'] = $data['password'];
	  echo "<script language=\"javascript\">alert(\"Selamat Datang\");document.location.href='../home.php';</script>";
 }else{
  	echo "<script language=\"javascript\">alert(\"Password atau Username Salah !!!\");document.location.href='../index.php';</script>";
 }
}
?>
