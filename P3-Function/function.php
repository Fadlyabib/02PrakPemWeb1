<?php
function luas_lingkarang($r){
    $Phi = 3.14;
    $luas = $Phi * $r * $r;
    return $luas;
}
    echo 'Luas Lingkaran : '.luas_lingkarang(7);
?>