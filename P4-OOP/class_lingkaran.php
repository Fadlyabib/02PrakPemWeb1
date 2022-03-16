<?php
class Lingkaran {
    private $r;
    const PHI = 3.14;

    function __construct( $r ){
        $this->r = $r;
    }
    function getLuas() {
        return self::PHI * $this->r * $this->r ;
    }
    function getKeliling() {
        return 2 * self::PHI * $this->r;
    }
}
?>