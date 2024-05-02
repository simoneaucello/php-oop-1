<?php

require_once __DIR__ . '/Model/Movie.php';

$ritornoAlFuturo = new Movie('Ritorno al Futuro', '1985', 'Fantascienza');

$theMatrix = new Movie('The Matrix', '1999', 'Fantascienza');



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />


  <title>Movie</title>
</head>

<body>
  <div class="container my-5 text-center">
    <h1 class="mb-5">Movies List</h1>
    <h3 class="mb-5"><?php echo $ritornoAlFuturo->getMovieInfo() ?></h3>
    <h3><?php echo $theMatrix->getMovieInfo() ?></h3>
  </div>

</body>

</html>