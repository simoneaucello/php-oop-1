<?php

class Movie
{
  public $nome;
  public $genere;


  public function __construct(string $_nome, string $_genere)
  {
    $this->nome = $_nome;
    $this->genere = $_genere;
  }
}
