<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai (get)</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 border border-dark pt-4 pr-4">
                <form method="GET" action="form_nilai.php" autocomplete="off">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="select" name="matkul" class="custom-select" required="required">
                                <option value="ddp">Dasar Dasar Pemrograman</option>
                                <option value="pw">Pemrograman Web</option>
                                <option value="bd">Basis Data</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label text-right">Nilai UTS</label>
                        <div class="col-4">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number"class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label text-right">Nilai UAS</label>
                        <div class="col-4">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label text-right">Nilai Tugas/Praktikum</label>
                        <div class="col-4">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 p-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 border border-dark text-center pt-1 pb-3">
                <?php
                if(isset($_GET['proses'])) {
                $nama_siswa = $_GET['nama'];
                $mata_kuliah = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];

                switch($mata_kuliah){
                    case "bd": $nama_kuliah = "Basis Data"; break;
                    case "pw": $nama_kuliah = "Pemrograman Web"; break;
                    case "ddp": $nama_kuliah = "Dasar Dasar Pemerograman"; break;
                    default: "";
                };

                echo '<br/>Nama : '.$nama_siswa;
                echo '<br/>Mata Kuliah : '.$nama_kuliah;
                echo '<br/>Nilai UTS : '.$nilai_uts;
                echo '<br/>Nilai UAS : '.$nilai_uas;
                echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
                }
                ?>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
</html>