<?php
class Operation{
    public $valor1;
    public $valor2;
    public $resultado;

    function __construct($cantidad1, $cantidad2)
    {
        $this->valor1 = $cantidad1;
        $this->valor2 = $cantidad2;
    }
    
    public function suma_valores(){
        $this->resultado = $this->valor1 + $this->valor2;
        return $this->resultado;

    } 
    
    public function resta_valores(){
        $this->resultado = $this->valor1 - $this->valor2;
        return $this->resultado;

    }    
    public function multiplicar_valores(){
        $this->resultado = $this->valor1 * $this->valor2;
        return $this->resultado;

    }    
    public function dividir_valores(){
        $this->resultado = $this->valor1 / $this->valor2;
        return $this->resultado;

    }    
}    

                                                             

