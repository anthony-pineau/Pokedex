<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$viewVars['baseUri']?>/css/style.css">
    <title>Pokedex</title>
</head>
<body>

<nav class="navbar navbar-expand-md custom-nav">
      <a class="navbar-brand" href="<?= $this->router->generate('homepage'); ?>">Pokedex</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Cette partie va automatique être masquée en version mobile -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item">
            <a class="nav-link" href="<?= $this->router->generate('homepage'); ?>">Liste</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= $this->router->generate('types-page'); ?>">Types</a>
            </li>
        </ul>
      </div>
    </nav>


<div class="container-fluid">