<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORM NILAI</title>
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
            <a class="nav-link text-primary" href="#">Daftar Mahasiswa</a>
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
                      <h1 class="m-0">Daftar Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Mahasiswa</li>
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
                      <table class="table">
                        <thead class="table-active">
                          <tr>
                            <th>
                              No
                            </th>
                            <th>
                              NIM
                            </th>
                            <th>
                              Nama
                            </th>
                            <th>
                              Prodi
                            </th>
                            <th>
                              Tahun Angkatan
                            </th>
                            <th>
                              IPK
                            </th>
                            <th>
                              Predikat
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>
                              <?php
                              require_once("class_daftar_mahasiswa.php");
                              $mahasiswa1 = new Mahasiswa("02011", "Faiz Fikri", "TI", 2012, 3.8);
                              $mahasiswa2 = new Mahasiswa("02012", "Annisa Kharunnisa", "TI", 2012, 3.9);
                              $mahasiswa3 = new Mahasiswa("01011", "Rosalie Naurah", "SI", 2010, 3.46);
                              $mahasiswa4 = new Mahasiswa("01012", "Defgi Muhammad", "SI", 2010, 3.2);
                              echo $mahasiswa1->nim."<br/>";
                            ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->nama."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->prodi."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->thn_angkatan."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->ipk."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->predikat_ipk()."<br/>";
                              ?>
                            </td>
                          </tr>
                          <tr class="table-active">
                            <td>
                              2
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa2->nim."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa2->nama."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa2->prodi."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa2->thn_angkatan."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa1->ipk."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa2->predikat_ipk()."<br/>";
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->nim."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->nama."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->prodi."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->thn_angkatan."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->ipk."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa3->predikat_ipk()."<br/>";
                              ?>
                            </td>
                          </tr>
                          <tr class="table-active">
                            <td>
                              4
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->nim."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->nama."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->prodi."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->thn_angkatan."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->ipk."<br/>";
                              ?>
                            </td>
                            <td>
                              <?php
                              echo $mahasiswa4->predikat_ipk()."<br/>";
                              ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10">
                      Showing 1 to 4 of 4 entries
                    </div>
                    <div class="col-md-2">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
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
      Develop By <strong>Saia</strong> @2022
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