<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/main.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <header class="section">
      <section class="hero is-warning">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item">
                  <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item" href="indexCI.php">
                    Accueil
                  </a>
                  <a class="navbar-item" href="recette.php">
                    Recettes
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title">
              Marmitonne
            </h1>
            <h2 class="subtitle">
              La cuisine qui détonne
            </h2>
          </div>
        </div>
      </section>
    </header>

    <section class="section">
      <div class="container">
        <div class="field has-addons has-addons-centered">
          <div class="control">
            <input class="input is-rounded" type="text" placeholder="Rechercher une recette...">
          </div>
          <div class="control">
            <a class="button is-info">
              Recherche
            </a>
          </div>
        </div>
      </div>
    </section>