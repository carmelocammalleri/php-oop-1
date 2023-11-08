<?php

class Film extends Movie{
  public $duration_film;
  public $production_year;
  
  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_duration_film, int $_production_year){

    $this->production_year = $_production_year;
    $this->duration_film = $_duration_film;

    parent::__construct (string $_title, Media $_image, float $_vote, array $_genre);
  }
}