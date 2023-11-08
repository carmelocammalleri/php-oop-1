<?php
require_once __DIR__ . "/Model/Media.php";
require_once __DIR__ . "/Model/Film.php";
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

  <title>Document</title>
</head>
<body>

  <div class="container">
    <h1>film list</h1>

    <!-- list film -->
    <div class="d-flex">
      <?php foreach($films as $film): ?>
          <div class="card" style="width: 18rem;">
            <img src="./img/<?php echo $film->image->image_name ?>" alt="<?php echo $film->image->title_image ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $film->title ?></h5>
              <p class="card-text"><?php echo $film->vote ?></p>
              <p class="card-text"><?php echo implode("/", $film->genre) ?></p>
            </div>
          </div>
      <?php endforeach; ?>
    </div>    

  </div>
  
</body>
</html>