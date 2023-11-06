<?php
class Movie {
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

class Media {

  public $image_name;
  public $title_image;

  public function __construct(string $_image_name, string $_title_image){
    $this->image_name = $_image_name;
    $this->title_image = $_title_image;
  }
}

$movies=[
  new Movie ('Una settimana da Dio', new Media ('acqua.jpg', 'Una settimana da Dio'), 8, ['commedia', 'teatro']),
  new Movie ('Una semana como Dios', new Media ('cover.jpg', 'Una settimana da Dio'), 7, ['commedia', 'musical']),
  new Movie ('Like a Boss', new Media ('love.webp', 'Una settimana da Dio'), 10, ['commedia', 'sonetto']),
  new Movie ('Funken Odin', new Media ('world.webp', 'Una settimana da Dio'), 5, ['commedia', 'thriller'])
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
  
<?php foreach($movies as $movie): ?>
  <div class="card" style="width: 18rem;">
  <img src="./img/<?php echo $movie->image->image_name ?>" alt="<?php echo $movie->image->title_image ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $movie->title ?></h5>
    <p class="card-text"><?php echo $movie->vote ?></p>
    <p class="card-text"><?php echo implode("/", $movie->genre) ?></p>
  </div>
</div>
  <?php endforeach; ?>
</body>
</html>