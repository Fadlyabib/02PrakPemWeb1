<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SILOKER - STTNF</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="layout-top-nav bg-light">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-primary" href="#">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Form Nilai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Berita</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div>
              <form class="form-inline">
                <div class="input-group input-group-sm pt-1">
                  <input class="form-control form-control-navbar bg-light" type="search" placeholder="Search"
                    aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar bg-light" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
          <li class="nav-item">
            <div><a href="#" class="nav-link text-primary">Login</a></div>
          </li>
        </ul>
      </div>
    </nav>
    <hr class="mt-0">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 border border-dark">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">Form Nilai</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Nilai</li>
                      </ol>
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->
              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <form method="POST" action="template_bootstrap.php" autocomplete="off">
                        <div class="form-group row">
                          <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
                          <div class="col-4">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control"
                              required="required">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
                          <div class="col-4">
                            <select id="select" name="matkul" class="custom-select" required="required">
                              <option value="ddp">Dasar Dasar Pemrograman</option>
                              <option value="pw">Pemrograman Web</option>
                              <option value="bd">Basis Data</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai_uts" class="col-4 col-form-label text-right">Nilai UTS</label>
                          <div class="col-2">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number"
                              class="form-control" required="required">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai_uas" class="col-4 col-form-label text-right">Nilai UAS</label>
                          <div class="col-2">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number"
                              class="form-control" required="required">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai_tugas" class="col-4 col-form-label text-right">Nilai Tugas/Praktikum</label>
                          <div class="col-2">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number"
                              class="form-control" required="required">
                          </div>
                        </div>
                        <div class="form-group row text-left">
                          <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-7 text-center pt-4 pb-4">
                      <?php
                        if(isset($_POST['proses'])) {
                        $nama_siswa = $_POST['nama'];
                        $mata_kuliah = $_POST['matkul'];
                        $nilai_uts = $_POST['nilai_uts'];
                        $nilai_uas = $_POST['nilai_uas'];
                        $nilai_tugas = $_POST['nilai_tugas'];
                        $total = (($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35));
        
                        switch($mata_kuliah){
                            case "bd": 
                                $nama_kuliah = "Basis Data"; 
                                break;
                            case "pw": 
                                $nama_kuliah = "Pemrograman Web"; 
                                break;
                            case "ddp": 
                                $nama_kuliah = "Dasar Dasar Pemrograman"; 
                                break;
                            default: "";
                        };
                        
                        if($total >= 85 && $total <=100){
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : A';
                            echo '<br/>Predikat : Sangat Memuaskan';
                        }elseif($total >= 70 && $total <=84){
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : B';
                            echo '<br/>Predikat : Memuaskan';
                        }elseif($total >= 56 && $total <=69){
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : C';
                            echo '<br/>Predikat : Cukup';
                        }elseif($total >= 36 && $total <=55){
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : D';
                            echo '<br/>Predikat : Kurang';
                        }elseif($total >= 0 && $total <=35){
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : E';
                            echo '<br/>Predikat : Sangat Kurang';
                        }else {
                            echo 'Nama : '.$nama_siswa;
                            echo '<br/>Mata Kuliah : '.$nama_kuliah;
                            echo '<br/>Nilai UTS : '.$nilai_uts;
                            echo '<br/>Nilai UAS : '.$nilai_uas;
                            echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                            echo '<br/>Grade : I';
                            echo '<br/>Predikat : Tidak ada';
                        };
        
                        if($total >= 55 and $total <=100){
                            echo '<br/>Anda dinyatakan Lulus';
                        }elseif($total >= 0 and $total <=55){
                            echo '<br/>Anda dinyatakan Gagal';
                        }else{
                            echo '<br/>Masukan Nilai dengan Benar!';
                        };
        
                        }else{
                            echo '<div class="alert alert-danger" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai, Grade dan Predikat </div>';
                        }
                        ?>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-2">
                    </div>
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
      </div>
      <!-- Default to the left -->
      Develop By <strong>templateEdit</strong> @2022
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>