<?php
require_once "class_account.php";
require_once "class_accountbank.php";

// $ac1 = new Account("020201", 5000000);
// $ac2 = new Account("010102", 4500000);

// $ac1->cetak();
// $ac1->deposit(75000);
// echo "<br/>Nabung 75000<br/>";
// $ac1->cetak();
// echo '<hr>';

$ab1 = new AccountBank('C001', 'Ahmad', 6000000);
$ab2 = new AccountBank('C002', 'Budi', 5350000);
$ab3 = new AccountBank('C003', 'Kurniawan', 2500000);

//sebelum function
$ab1->cetak();
echo "<hr>";
$ab2->cetak();
echo "<hr>";
$ab3->cetak();
echo "<hr>";

// echo '<br/>Ahmad nabung 1.000.000';
$ab1->deposit(1000000);
// echo '<br/>Ahmad transfer 1.500.000 ke Kurniawan dan 500.000 ke Budi';
$ab1->transfer($ab3, 1500000);
$ab1->transfer($ab2, 500000);
// echo '<br/>Budi tarik uang 2.500.000';
$ab2->tarik_uang($ab2, 2500000); 

//sesudah function
$ab1->cetak();
echo "<hr>";
$ab2->cetak();
echo "<hr>";
$ab3->cetak();
echo "<hr>";
?>