<?php

class Media {

  public $image_name;
  public $title_image;

  public function __construct(string $_image_name, string $_title_image){
    $this->image_name = $_image_name;
    $this->title_image = $_title_image;
  }
}