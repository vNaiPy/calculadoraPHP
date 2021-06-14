<?php

Class Calculadora{
    private $total;
    private $n1;
    private $n2;

    function _construct(){
        $this->total  = 0;
        $this->n1     = 0;
        $this->n2     = 0;
    }

    public function setN1($parametro_n1){
        $this->n1 = $parametro_n1;
    }
    public function setN2($parametro_n2){
        $this->n2 = $parametro_n2;
    }
    public function getTotal(){
        return $this->total;
    }
    public function somar(){
        $this->total = $this->n1 + $this->n2;
    }
    public function subtrair(){
        $this->total = $this->n1 - $this->n2;
    }
    public function multiplicar(){
        $this->total = $this->n1 * $this->n2;
    }
    public function dividir(){
        $this->total = $this->n1 / $this->n2;
    }
}





?>