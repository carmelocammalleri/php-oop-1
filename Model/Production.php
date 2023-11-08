<?php

class Production {
  public $title;
  public $image;
  public $vote;
  public $genre;

  public function __construct (string $_title, Media $_image, float $_vote, array $_genre){
    $this->title = $_title;
    $this->image = $_image;
    $this->vote = $_vote;
    $this->genre = $_genre;
  }
}