<?php
class Calculadora
{
    private $numeros = [];

    public function Soma($a, $b)
    {
        $this->numeros[0] = $a;
        array_push($this->numeros, $b);
        return array_sum($this->numeros);
    }

    public function Subtração($a, $b)
    {
        return $a - $b;
    }

    public function Multiplicação($a, $b)
    {
        return $a * $b;
    }

    public function Divisão($a, $b)
    {
        return $a / $b;
    }
}
