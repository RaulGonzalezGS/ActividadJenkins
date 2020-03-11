<?php


namespace ecuacion\modelo;


class EcuacionGrado2
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function ecuacionsegundogrado($i){
        return ($this->c * pow($i, 2)) +  ($this->b * $i) + $this->a;
    }
}