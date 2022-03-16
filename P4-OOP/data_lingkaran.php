<?php
require_once "class_lingkaran.php";

echo "NILAI PHI: ".Lingkaran::PHI."<br/>";
$lingkar1 = new Lingkaran( 10 );
$lingkar2 = new Lingkaran( 4 );

echo "Luas Lingkaran 1: ".$lingkar1->getLuas()."<br/>";
echo "Luas Lingkaran 2: ".$lingkar2->getLuas()."<br/>";
echo "<hr/>";
echo "Keliling Lingkaran 1: ".$lingkar1->getKeliling()."<br/>";
echo "Keliling Lingkaran 2: ".$lingkar2->getKeliling()."<br/>";
?>