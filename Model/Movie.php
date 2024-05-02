<?php

class Movie
{
  public $title;
  public $year;
  public $genres;


  public function __construct(string $_title, int $_year, array $_genres)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genres = $_genres;
  }

  public function getMovieInfo()
  {
    return "$this->title | $this->year";
  }
}
