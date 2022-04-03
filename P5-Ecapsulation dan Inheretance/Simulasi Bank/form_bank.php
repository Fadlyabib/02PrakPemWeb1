<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM NILAI MAHASISWA</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="nav-link text-primary" href="#">Form ATM</a>
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
                                    <input class="form-control form-control-navbar bg-light" type="search"
                                        placeholder="Search" aria-label="Search">
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
                                            <h1 class="m-0">Form ATM</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active">Form ATM</li>
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
                                            <form method="POST" action="form_bank.php" autocomplete="off">
                                                <div class="form-group row">
                                                    <label for="nim" class="col-4 col-form-label text-right">Nomor
                                                        Rekening</label>
                                                    <div class="col-4">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-500px"></i>
                                                                </div>
                                                            </div>
                                                            <input id="norek" name="norek" placeholder="Nomor Rekening"
                                                                type="number" class="form-control" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="customer" class="col-4 col-form-label text-right">Nama
                                                        Customer</label>
                                                    <div class="col-4">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-book"></i>
                                                                </div>
                                                            </div>
                                                            <input id="customer" name="customer"
                                                                placeholder="Nama Customer" type="text"
                                                                required="required" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="saldo"
                                                        class="col-4 col-form-label text-right">Saldo</label>
                                                    <div class="col-4">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-dollar"></i>
                                                                </div>
                                                            </div>
                                                            <input id="saldo" name="saldo" placeholder="Saldo"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row text-left">
                                                    <div class="offset-4 col-8">
                                                        <button name="proses" type="submit"
                                                            class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pt-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table">
                                                        <thead class="table-active">
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>
                                                                    No Rekening
                                                                </th>
                                                                <th>
                                                                    Customer
                                                                </th>
                                                                <th>
                                                                    Saldo
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            require_once("class_accountbank.php");
                                                            $ab1 = new AccountBank('C001', 'Ahmad', 6000000);
                                                            $ab2 = new AccountBank('C002', 'Budi', 5350000);
                                                            $ab3 = new AccountBank('C003', 'Kurniawan', 2500000);

                                                            $ar_ab = [$ab1, $ab2, $ab3];
                                                            
                                                            if(isset($_POST['proses'])){
                                                            $norek = $_POST['norek'];
                                                            $customer = $_POST['customer'];
                                                            $saldo = $_POST['saldo'];
                                                            
                                                            $ab4 = new AccountBank($norek, $customer, $saldo);
                                                            array_push($ar_ab, $ab4);
                                                            }

                                                            $no = 1;
                                                            foreach($ar_ab as $obj){
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?=$no?>
                                                                </td>
                                                                <td>
                                                                    <?=$obj->nomor?>
                                                                </td>
                                                                <td>
                                                                    <?=$obj->customer?>
                                                                </td>
                                                                <td>
                                                                    <?=$obj->saldo?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $no++;
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
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