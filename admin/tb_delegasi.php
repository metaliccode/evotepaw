<?php
include('php/cek-akses.php');
?>   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin Panel E-vote Himatif</title>
 
  <!-- Bootstrap CSS-->
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Icon FA-->
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="../js/bootstrap.min.js"></script>
  <!--css-->
  <link href="../css/bootstrap/bs-admin.css" rel="stylesheet">
  <!-- JavaScript-->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <!--costum u semua page-->
  <script src="../js/js-admin.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="home.php">Administrator E-vote</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=" #navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Home</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="form_delegasi.php">
              <i class="fa fa-fw fa-vcard-o"></i>
              <span class="nav-link-text">Input Data Delegasi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text">Input Data User Admin</span>
            </a>
          </li>

          <li class="nav-item">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Data Tabel</span>
              </a>
          
              <ul class="sidenav-second-level collapse" id="collapseComponents">
                  <li>
                    <a href="tb_delegasi.php">Data delegasi</a>
                  </li>
                  <li>
                    <a href="#">Data telah memilih</a>
                  </li>
                  <li>
                    <a href="#">Data belum memilih</a>
                  </li>
                  <li>
                    <a href="#">Data calon ketua</a>
                  </li>
              </ul>
          </li>
        
          <li class="nav-item">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
          
              <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                <li>
                  <a href="login.html">Garafik Hasil Sementara</a>
                </li>
                <li>
                  <a href="register.html">Persyaratan Calon Ketua</a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-sitemap"></i>
              <span class="nav-link-text">Berita</span>
            </a>
            
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-link"></i>
              <span class="nav-link-text">About</span>
            </a>
          </li>

      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#id_logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Tabel Delegasi</li>
      </ol>
    </div>
  

<!--Content isi-->
  <div class="container">
    <div class="card">
      <div class="card-header">Data tabel delegasi</div>
      <div class="container">     
        <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nim</th>
              <th>Password</th>
              <th>Angkatan</th>
              <th>Opsi</th>
            </tr>
          </thead>
    
        <?php
          
          include('../config/koneksi.php');
          
          $query = mysql_query("SELECT * FROM tb_delegasi ORDER BY id_delegasi DESC") or die(mysql_error());
          
          if(mysql_num_rows($query) == 0){  
            
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            
          }else{ 
            
            $no = 1;  
            while($data = mysql_fetch_assoc($query)){ 
              
              //menampilkan row dengan data di database
              echo '<tbody>';
              echo '<tr>';
                echo '<td>'.$no.'</td>'; 
                echo '<td>'.$data['nama_delegasi'].'</td>'; 
                echo '<td>'.$data['nim'].'</td>';
                echo '<td>'.$data['password'].'</td>';  
                echo '<td>'.$data['angkatan'].'</td>';  
                echo '<td>
                <a class="fa fa-pencil" href="edit_delegasi.php?id='.$data['id_delegasi'].'">Edit</a> / 
                <a class="fa fa-trash" href="php/hapus_delegasi.php?id='.$data['id_delegasi'].'" onclick="return confirm(\'Apakah Anda Yakin Ingin Mengahapus Data ini?\')">Hapus</a></td>'; 
              echo '</tr>';
              echo "</tbody>";
              $no++; 
            }
          }
          ?>
        </table>
        </div>
    </div>
    </div>
  </div>
  

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy ProjectPAW 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="id_logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tinggalkan akun anda?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Silahkan pilih logout jika anda ingin keluar dari akun ini.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="php/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>  
</body>

</html>
