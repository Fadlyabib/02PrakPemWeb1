<?php
require_once "class_account.php";

class AccountBank extends Account{
    public $customer;

    function __construct($nomor, $customer, $saldo){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan, $uang){
        $ab_tujuan->deposit($uang); //saldo akun tujuan bertambah
        $this->witdrawl($uang); //saldo akun pemilik berkurang
    }
    public function tarik_uang($ab_pemilik, $uang){
        $ab_pemilik->witdrawl($uang); //saldo akun pemillik berkurang
    }

    public function cetak(){
        parent::cetak(); //panggil function milik parent 
        echo "<br/>Customer : ".$this->customer;
    }
}
?>