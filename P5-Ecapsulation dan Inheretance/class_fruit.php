<?php
Class Fruit {
    // public $name;
    // protected $color;
    // private $weight;

    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    private function set_weight($n){
        $this->weight = $n;
    }
}
// $mango = new Fruit();
// $mango->name = 'Mango';
// $mango->color = 'Yellow';
// $mango->weight = '300';

$mango = new Fruit();
$mango->set_name('Mango');
// $mango->set_color('Yellow');
// $mango->set_weight('300'); 
?>