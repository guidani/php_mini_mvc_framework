<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->view->pageTitle ? $this->view->pageTitle : "Title" ?></title>
</head>

<body>
  <?= include_once __DIR__ . "/_header.php" ?>
  <?= $this->content(); ?>
</body>

</html>