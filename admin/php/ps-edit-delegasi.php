<?php
function acakangkahuruf($panjang)
{
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}

$password = acakangkahuruf(7);


if(isset($_POST['simpan'])){
	
	include('../../config/koneksi.php');
	
	$id				= $_POST['id'];
	$nama_delegasi	= $_POST['nama_delegasi'];	
	$nim			= $_POST['nim'];	
	$angkatan		= $_POST['angkatan'];
	
	$update = mysql_query("UPDATE tb_delegasi SET nama_delegasi='$nama_delegasi', nim='$nim', password='$password', angkatan='$angkatan' WHERE id_delegasi='$id'") or die(mysql_error());
	

if($update){
		echo "<script>alert('Data Berhasi Disimpan !');window.location='../tb_delegasi.php';</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan !');window.location='../tb_delegasi.php';</script>";	
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>