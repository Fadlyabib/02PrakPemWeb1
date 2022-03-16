<?php
require_once("class_mahasiswa.php");

$mahasiswa = new Mahasiswa(011022, "Eko", 4);
echo "Predikat: ".$mahasiswa->predikat_ipk()."<br/>";
echo "NIM: ".$mahasiswa->nim."<br/>";
echo "Nama: ".$mahasiswa->nama."<br/>";
?>