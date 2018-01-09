<?php 
include('../config/kon.php');
include('php/cek-akses.php');

$sql="SELECT * FROM tb_kandidat ORDER BY id_kandidat";
$query=mysqli_query($koneksi,$sql);

$sqljs="SELECT sum(jml_suara) as jsuara FROM tb_kandidat";
$queryjs=mysqli_query($koneksi,$sqljs);
$rjs=mysqli_fetch_array($queryjs);

$id_pemilih=$_SESSION['id_delegasi'];
$sqlpilih="SELECT * FROM tb_pemilihan WHERE id_pemilih='$id_pemilih'";
$querypilih=mysqli_query($koneksi,$sqlpilih);
$ada=mysqli_num_rows($querypilih);
?>

<div class="card mb-3 mt-3">
  <div class="card-header bg-dark text-light"><i class="fa fa-file"></i> 
    Daftar Kandidat Ketua Himatif
  </div>
  
        <div class="card-body mt-3">
          <div class="row">
            
          <?php
              
          while($r=mysqli_fetch_array($query)){ 
                  echo '
                  <div class="card col-md-3 container">
                  <div class="card-body">
                  <img src="../foto/'.$r['foto'].'" width=70 height=90 style=float:right; >';
                  echo "<b>".$r['nama_kandidat']."</b>";
                  echo "<br>".$r['nim'];
                  echo '<br><a href="index_delegasi.php?page=detail_kandidat&nim='.$r['nim'].'">View Detail</a>';
                  echo "<h3>".($r['jml_suara']/$rjs['jsuara']*100)."%</h3>";
                  echo $r['jml_suara']." suara<br></b>";
                  //echo '</div>';
              if($ada==0){
                  echo'<a href="php/ps-pemilihan.php?id='.$r['id_kandidat'].'" class="small-box-footer">Pilihan Anda? <i class="fa fa-arrow-circle-up"></i></a>';
              }else{
                echo '<a href="#" class="small-box-footer">Anda sudah memilih <i class="fa fa-check"></i></a>';
              }
                echo '  </div>
                </div>';
          }
          ?>
          </div>
        </div>
        <div class="card card-footer mt-4 bg-dark text-light">Aplikasi E-vote</div>
      </div>
  </div>
</div>
