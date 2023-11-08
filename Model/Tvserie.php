<?php

class Tvserie extends Production{
  public $season;
  public $production_year;
  
  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_season, int $_production_year){

    $this->production_year = $_production_year;
    $this->season = $_season;

    parent::__construct ($_title, $_image, $_vote, $_genre);
  }
}