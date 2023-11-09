<?php

class Production {

  use PublishedYear;

  public $title;
  public $image;
  public $vote;
  public $genre;

  public function __construct (string $_title, Media $_image, float $_vote, array $_genre, int $_published_year){

    $this->title = $_title;
    $this->image = $_image;
    $this->vote = $_vote;
    $this->genre = $_genre;
    $this->published_year = $_published_year;
  }
}