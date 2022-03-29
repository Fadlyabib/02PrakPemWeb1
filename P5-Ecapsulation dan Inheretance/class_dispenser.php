<?php
class Dispenser{
    public $volume;
    public $hargaSegelas;
    public $volumeGelas;
    public $namaMinuman;
    
    function isi($vol, $harga, $volume, $nama){
        $this->volume = $vol;
        $this->hargaSegelas = $harga;
        $this->volumeGelas = $volume;
        $this->namaMinuman = $nama;

        echo "Sebuah Dispenser berisi $this->volume ml bernama $this->namaMinuman, harga setiap gelas Rp$this->hargaSegelas berisi $this->volumeGelas ml.";
    }
}
$bisnis = new Dispenser();
$bisnis->isi(250, 1000, 10, 'segarrr');
?>