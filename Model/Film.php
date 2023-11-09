<?php

class Film extends Production{
  public $duration_film;
  
  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_duration_film, int $_published_year){

    $this->duration_film = $_duration_film;

    parent::__construct ($_title, $_image, $_vote, $_genre, $_published_year, $_duration_film);
  }
}