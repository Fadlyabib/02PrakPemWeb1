<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="post" action="form_belanja.php">
                    <legend>Belanja Online</legend>
                    <hr />
                    <div class="form-group row pl-4">
                        <label for="customer" class="col-1 col-form-label text-right">Customer</label>
                        <div class="col-3">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row pl-4">
                        <label class="col-1.5 text-right">Pilih Produk</label>
                        <div class="col-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci" required="required">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row pl-4">
                        <label for="jumlah" class="col-1 col-form-label text-right pr-2">Jumlah</label>
                        <div class="col-2">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-1 col-4">
                            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div id="card-285994">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <a class="card-link" data-toggle="collapse" data-parent="#card-285994">Daftar Harga</a>
                        </div>
                        <div id="card-element-331206" class="collapse show p-1">
                            <div class="card-body p-1">
                                TV : 4.200.000
                            </div>
                            <hr />
                            <div class="card-body p-1">
                                Kulkas : 3.100.000
                            </div>
                            <hr />
                            <div class="card-body p-1">
                                Mesin Cuci : 3.800.000
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <a class="collapsed card-link text-white" data-toggle="collapse"
                                data-parent="#card-285994">Harga Dapat Berubah Setiap Saat</a>
                        </div>
                        <div id="card-element-638775" class="collapse">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_POST['proses'])) {
            $nama_customer = $_POST['customer'];
            $pilih_produk = $_POST['produk'];
            $jumlah_beli = $_POST['jumlah'];

            switch($pilih_produk){
                case "tv": $nama_produk = "TV"; break;
                case "kulkas": $nama_produk = "Kulkas"; break;
                case "mesincuci": $nama_produk = "Mesin Cuci"; break;
                default: "";
            };

            if($nama_produk == 'TV'){
                echo '<br/>Nama Customer : '.$nama_customer;
                echo '<br/>Produk Pilihan : '.$nama_produk;
                echo '<br/>Jumlah Beli : '.$jumlah_beli;
                echo '<br/>Total Belanja : Rp'.$total = $jumlah_beli * 4200000;
            }elseif($nama_produk == 'Kulkas'){
                echo '<br/>Nama Customer : '.$nama_customer;
                echo '<br/>Produk Pilihan : '.$nama_produk;
                echo '<br/>Jumlah Beli : '.$jumlah_beli;
                echo '<br/>Total Belanja : Rp'.$total = $jumlah_beli * 3100000;
            }elseif($nama_produk == 'Mesin Cuci'){
                echo '<br/>Nama Customer : '.$nama_customer;
                echo '<br/>Produk Pilihan : '.$nama_produk;
                echo '<br/>Jumlah Beli : '.$jumlah_beli;
                echo '<br/>Total Belanja : Rp'.$total = $jumlah_beli * 3800000;
            };
            }
            ?>
        </div>
    </div>
</body>
</html>