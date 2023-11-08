<?php

class Tvserie extends Movie{
  public $duration_tvserie;
  public $production_year;
  
  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_duration_tvserie, int $_production_year){

    $this->production_year = $_production_year;
    $this->duration_tvserie = $_duration_tvserie;

    parent::__construct (string $_title, Media $_image, float $_vote, array $_genre);
  }
}