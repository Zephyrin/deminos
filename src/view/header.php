<?php

if (isset($_SESSION['players'])){
    $buttons = '<a href="?page=morpion&resetGame" class="button is-primary">
                <strong>Recommencer le jeu en cours</strong>
              </a>
              <a href="?page=home&setPlayer=reset" class="button is-primary">
                Reset du jeu et joueurs
              </a>';
}else {
    $buttons = '<a href="?page=home&setPlayers" class="button is-primary">
                <strong>Set players</strong>
              </a>';

}
echo '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>'.$this->title.'</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

</head>
<body>
<header>

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="?page=home">
      <img src="https://static.dezeen.com/uploads/2019/04/ikea-logo-new-hero-1.jpg" alt="Bulma: Free, open source, and modern CSS framework based on Flexbox" width="90" height="28">
    </a>

     <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Jeux
        </a>

        <div class="navbar-dropdown">
          <a href="?page=morpion" class="navbar-item">
            Morpion
          </a>
          
          
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
              '.$buttons.'
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
<main>

<div class="columns">
<div class="column is-one-fifth">

</div>

<div class="column is-three-fifths">

';
echo '<h1 class="title" >'.$this->title.'</h1><br>'.$this->infoMsg;

//var_dump($_SESSION['tour']);


