<?php

class Plantas 
{

private string $nome;
private string $especie;
private float $aguaPorDia;
private float $calcularAguaSemanal;

public function __construct(string $nome, string $especie, float $aguaPorDia)
{
    $this->nome = $nome; 
    $this->especie = $especie;
    $this->aguaPorDia = $aguaPorDia;  
}

public function getNome()
{
    return $this->nome;
}

public function getEspecie()
{
    return $this->especie;
}

public function getAguaPorDia(): int
{
    return $this->aguaPorDia;
}

public function getcalcularAguaSemanal(): float
{
    return $this->calcularAguaSemanal;
}
















}

