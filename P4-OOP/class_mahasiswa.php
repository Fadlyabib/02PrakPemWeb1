<?php
class Mahasiswa{
    var $nim;
    var $namap;
    var $thn_angakatan;
    var $prodi;
    var $ipk;
    function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }
    function predikat_ipk() {
        if($this->ipk < 2.0) return "Cukup";
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";
        elseif($this->ipk >= 3.75 && $this->ipk <= 4) return "Cum Laude";
    }
}
?>