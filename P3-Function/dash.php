<?php
    require_once('libfungsi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Bangun Ruang dan Datar</title>
</head>
<body>
    <h1>Luas Segitiga adalah <?= luas_segitiga(3,5);?></h1>
    <h1>Luas Persegi Panjang adalah <?= persegi_panjang(7,9);?></h1>
    <h1>Valome Kubus adalah <?= volume_kubus(9);?> </h1>
    <h1>Valome Balok adalah <?= volume_balok(3,5,7);?></h1>
</body>
</html>