<?php

class Planta

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

public function getCalcularAguaSemanal(): float
{
    return $this->aguaPorDia*7;

}

public function setNome(string $nome) : void{
     $this->nome = $nome;
}

public function setEspecie(string $especie): void
{
     $this->especie = $especie;
}

public function setAguaPorDia(float $aguaPorDia): void
{
     $this->aguaPorDia = $aguaPorDia;
}














}

