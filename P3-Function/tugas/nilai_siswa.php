<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai (post)</title>
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
                <form method="POST" action="nilai_siswa.php" autocomplete="off">
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
            <div class="col-md-5 border border-dark text-center pt-4 pb-4">
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
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
</html>