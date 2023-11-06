<?php
class Movie {
  public $title;
  public $image;
  public $vote;
  public $genre;

  public function __construct (string $_title, string $_image, float $_vote, array $_genre){
    $this->title = $_title;
    $this->image = $_image;
    $this->vote = $_vote;
    $this->genre = $_genre;
  }
}

class Media {

  public $image_name;
  public $title_image;

  public function __construct(string $_image_name, string $_title_image){
    $this->image_name = $_image_name;
    $this->title_image = $_title_image;
  }
}

$movies=[
  new Movie ('Una settimana da Dio', new Media('acqua.jpg', 'Una settimana da Dio'), 8, ['commedia', 'teatro']),
  new Movie ('Una semana como Dios', new Media('cover.jpg', 'Una settimana da Dio'), 7, ['commedia', 'musical']),
  new Movie ('Like a Boss', new Media('love.webp', 'Una settimana da Dio'), 10, ['commedia', 'sonetto']),
  new Movie ('Funken Odin', new Media('world.webp', 'Una settimana da Dio'), 5, ['commedia', 'thriller'])
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php foreach($movies as $movie): ?>
  <ul>
    <li><?php echo $movie->title ?></li>
    <li><img src="/img/<?php echo $movie->image->image_name ?>" alt=""></li>
    <li><?php echo $movie->vote ?></li>
    <li><?php echo implode("/", $movie->genre) ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>