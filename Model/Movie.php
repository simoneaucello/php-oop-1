<?php

class Movie
{
  public $nome;
  public $anno;
  public $genere;


  public function __construct(string $_nome, string $_anno, string $_genere)
  {
    $this->nome = $_nome;
    $this->anno = $_anno;
    $this->genere = $_genere;
  }

  public function getMovieInfo()
  {
    return "$this->nome | $this->anno | $this->genere";
  }
}
