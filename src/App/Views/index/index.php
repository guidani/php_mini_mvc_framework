<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <?php include_once __DIR__ . "/../templates/_header.php" ?>
  <h1>Home</h1>
  <?php foreach ($this->view->dados as $indice => $valor) : ?>
    <?= $valor . "<br>"; ?>
  <?php endforeach ?>

</body>

</html>