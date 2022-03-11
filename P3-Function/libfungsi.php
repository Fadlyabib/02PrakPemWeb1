<?php
function luas_segitiga($alas, $tinggi){    
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
function persegi_panjang($p, $l){
    $luas = $p * $l;
    return $luas;
}
function volume_kubus($s){
    $volume = $s * $s * $s;
    return $volume;
}
function volume_balok($p, $l, $t){
    $volume = $p * $l * $t;
    return $volume;
}
?>