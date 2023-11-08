<?php
require_once __DIR__ . "/Model/Production.php";
require_once __DIR__ . "/Model/Media.php";
require_once __DIR__ . "/Model/Film.php";
require_once __DIR__ . "/Model/Tvserie.php";
require_once __DIR__ . "/db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- style css -->
  <link rel="stylesheet" href="./css/style.css">

  <title>Document</title>
</head>
<body>

  <div class="container">
    <h1 class="text-uppercase">film list</h1>

    <!-- list film e serietv -->
    <div class="d-flex flex-wrap justify-content-between">
      <?php foreach($films as $film): ?>
          <div class="card col-3 my-3" style="width: 18rem;">

          <!-- immagine -->
         
            <img src="./img/<?php echo $film->image->image_name ?>" alt="<?php echo $film->image->title_image ?>">
    

            <div class="card-body">
              <h4 class="card-title"><?php echo $film->title ?></h4>
              
              <p class="card-text publicationYear">
                Anno: <?php echo $film->production_year ?>
              </p>


            <!-- condizione per la stampa di elementi diversi -->
              <?php  if(isset ($film->duration_film)): ?>
              <p class="card-text duration">
                Durata: <?php  echo $film->duration_film ?> min
              </p>

              <?php else: ?>
              <p class="card-text duration">
                Stagioni:<?php  echo $film->season ?>
              </p>
                <?php endif; ?>
            <!-- /condizione per la stampa di elementi diversi -->

              <p class="card-text">Voto: <?php echo $film->vote ?></p>
              <p class="card-text genreFilm">Genere: <?php echo implode("/", $film->genre) ?></p>


            </div>
          </div>
      <?php endforeach; ?>
    </div>    

  </div>
  
</body>
</html>