<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    echo '<script language="javascript">alert("Anda harus Login Terlebih DahuLu!"); document.location="../admin/index.php";</script>';

}

?>