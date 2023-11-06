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

$movies=[
  new Movie ('Una settimana da Dio', 'acqua.jpg', 8, ['commedia', 'teatro']),
  new Movie ('Una semana como Dios', 'cover.jpg', 7, ['commedia', 'musical']),
  new Movie ('Like a Boss', 'love.webp', 10, ['commedia', 'sonetto']),
  new Movie ('Funken Odin', 'world.webp', 5, ['commedia', 'thriller'])
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
    <li><?php echo $movie->image ?></li>
    <li><?php echo $movie->vote ?></li>
    <li><?php echo implode("/", $movie->genre) ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>