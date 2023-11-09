<?php

class Tvserie extends Production{
  public $season;
  
  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_season, int $_published_year){

    $this->season = $_season;

    parent::__construct ($_title, $_image, $_vote, $_genre, $_published_year, $_season);
  }
}