<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->view->pageTitle ? $this->view->pageTitle : "Title" ?></title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
    </ul>
  </nav>
  <header>
    <h1>Default</h1>
  </header>
  <main>
    <h2>lorem</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto deserunt eveniet officia sequi eum! Maxime corrupti, vitae sequi voluptatum fugiat nulla voluptate quod perspiciatis deserunt porro excepturi exercitationem dolores nisi.</p>
  </main>
  <?= $this->content(); ?>
</body>

</html>