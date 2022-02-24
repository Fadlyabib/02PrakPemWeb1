<?php
    //definisikan konstan
    define('PHI', 3.14);
    define('DBNAME', 'db_mahasiswa');
    define('DBSERVER', 'localhost');

    //deklarasi variabel
    $jari = 10;
    $luas = PHI * $jari * $jari;
    $keliling = 2 * PHI * $jari;

    //menampilkan hasil
    echo 'Luas Lingkaran : '.$luas.'<br>';
    echo 'Keliling Lingkaran : '.$keliling;

    echo '<hr>';

    // menampilkan konstan
    echo 'Nama Database : '.DBNAME.'<br>';
    echo 'Server Database : '.DBSERVER;
?>